<?php

declare(strict_types=1);

$extracted_path = __DIR__ . '/../reka-src';
$output_file = __DIR__ . '/../reka-src.json';

$rekaSrc = __DIR__ . '/../reka-src';
$scrapeOut = __DIR__ . '/../reka-scrape.json';

if (!is_dir($rekaSrc)) {
    fwrite(STDERR, "Missing reka-src/ folder. Expected at: " . $rekaSrc . PHP_EOL);
    exit(1);
}

function readf(string $path): string {
    return file_get_contents($path) ?: '';
}

function re_find_all(string $pattern, string $text): array {
    preg_match_all($pattern, $text, $m, PREG_SET_ORDER);
    return $m ?: [];
}

function parse_interface_fields(string $body): array {
    $fields = [];
    $parts = preg_split('/;\s*/', trim($body)) ?: [];
    foreach ($parts as $p) {
        $p = trim($p);
        if ($p === '' || str_starts_with($p, '//')) continue;
        if (preg_match('/^(\w+)\s*(\??):\s*(.+)$/', $p, $mm)) {
            $fields[] = ['name'=>$mm[1], 'optional'=>($mm[2]==='?'), 'type'=>trim($mm[3])];
        } else {
            $fields[] = ['raw'=>$p];
        }
    }
    return $fields;
}

$reComponentName   = '/defineOptions\s*\(\s*{[^}]*name\s*:\s*[\'"]([^\'"]+)[\'"]/s';
$reExportInterface = '/export\s+interface\s+(\w+)\s*{([^}]*)}/s';
$reDefineProps     = '/defineProps\s*<\s*([^>]+)\s*>\s*\(\s*\)/s';
$reDefineEmits     = '/defineEmits\s*<\s*([^>]+)\s*>\s*\(\s*\)/s';
$reDefineSlots     = '/defineSlots\s*<\s*([^>]+)\s*>\s*\(\s*\)/s';
$reImports         = '/import\s+[^;]+from\s+[\'"]([^\'"]+)[\'"]/';
$reTemplate        = '/<template>(.*?)<\/template>/s';
$reSlotNamed       = '/<slot\s+[^>]*name=[\'"]([^\'"]+)[\'"][^>]*>/i';
$reSlotDefault     = '/<slot(\s+[^>]*)?>/i';
$reClassStatic     = '/class\s*=\s*[\'"]([^\'"]+)[\'"]/';
$reClassBound      = '/:class\s*=\s*[\'"][^\'"]+[\'"]/';
$reAttrAny         = '/\s([:@]?[a-zA-Z_][-:\w]*)\s*=\s*[\'"][^\'"]+[\'"]/';

$components = [];
$tsmods     = [];
$importMap  = []; // module => [consumers]
$primitiveModules = [];
$primitiveUsers   = [];

// Walk filesystem
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rekaSrc, FilesystemIterator::SKIP_DOTS));
foreach ($rii as $file) {
    /** @var SplFileInfo $file */
    if (!$file->isFile()) continue;
    $path = $file->getPathname();
    $rel  = substr($path, strlen($rekaSrc) + 1);
    $txt  = readf($path);

    if (str_ends_with($rel, '.vue')) {
        $record = [
            'file' => $rel,
            'component' => null,
            'props' => ['from_defineProps' => null, 'interfaces'=>[]],
            'emits' => null,
            'slots' => ['ts'=>null, 'template_named'=>[], 'template_has_default'=>false],
            'imports' => [],
            'dependencies' => [],
            'template_attrs' => [],
            'template_classes' => ['static'=>[], 'bound'=>false],
        ];

        if (preg_match($reComponentName, $txt, $m)) $record['component'] = $m[1];

        foreach (re_find_all($reExportInterface, $txt) as $m) {
            $record['props']['interfaces'][] = [
                'interface' => $m[1],
                'fields'    => parse_interface_fields($m[2]),
            ];
        }
        if (preg_match($reDefineProps, $txt, $m))  $record['props']['from_defineProps'] = trim($m[1]);
        if (preg_match($reDefineEmits, $txt, $m))  $record['emits'] = trim($m[1]);
        if (preg_match($reDefineSlots, $txt, $m))  $record['slots']['ts'] = trim($m[1]);

        $imports = [];
        foreach (re_find_all($reImports, $txt) as $m) $imports[] = $m[1];
        $record['imports'] = $imports;

        // Template analysis
        if (preg_match($reTemplate, $txt, $mt)) {
            $tpl = $mt[1];
            $named = [];
            foreach (re_find_all($reSlotNamed, $tpl) as $mm) $named[] = $mm[1];
            $record['slots']['template_named'] = array_values(array_unique($named));
            $record['slots']['template_has_default'] = (bool)preg_match($reSlotDefault, $tpl);

            $statics = [];
            foreach (re_find_all($reClassStatic, $tpl) as $mm) $statics[] = $mm[1];
            $record['template_classes']['static'] = array_values(array_unique($statics));
            $record['template_classes']['bound'] = (bool)preg_match($reClassBound, $tpl);

            $attrs = [];
            foreach (re_find_all($reAttrAny, $tpl) as $mm) $attrs[] = trim($mm[1]);
            sort($attrs);
            $record['template_attrs'] = array_values(array_unique($attrs));
        }

        // Dependencies
        $deps = array_values(array_filter($imports, fn($im) => str_starts_with($im, '@reka-ui') || str_starts_with($im, './') || str_starts_with($im, '../')));
        $record['dependencies'] = $deps;
        $components[] = $record;

        // import map for reachability
        foreach ($imports as $im) {
            $importMap[$im][] = $rel;
            if (stripos($im, 'Primitive') !== false) {
                $primitiveModules[$im] = true;
                $primitiveUsers[$rel][] = $im;
            }
        }
    } elseif (preg_match('/\.(mts|cts|tsx|ts)$/', $rel)) {
        $interfaces = [];
        foreach (re_find_all($reExportInterface, $txt) as $m) {
            $interfaces[] = ['interface'=>$m[1], 'fields'=>parse_interface_fields($m[2])];
        }
        $imports = [];
        foreach (re_find_all($reImports, $txt) as $m) $imports[] = $m[1];

        $tsmods[] = ['file'=>$rel, 'interfaces'=>$interfaces, 'imports'=>$imports];

        foreach ($imports as $im) {
            $importMap[$im][] = $rel;
            if (stripos($im, 'Primitive') !== false) {
                $primitiveModules[$im] = true;
                $primitiveUsers[$rel][] = $im;
            }
        }
    }
}

// Primitive reachability (3 hops)
$primitiveRoots = array_keys($primitiveModules);
$layers = [];
$current = $primitiveRoots;
$seen = array_fill_keys($primitiveRoots, true);
for ($d=0; $d<3; $d++) {
    $nextFiles = [];
    foreach ($current as $mod) {
        foreach ($importMap[$mod] ?? [] as $consumer) {
            $nextFiles[$consumer] = true;
        }
    }
    $layer = array_keys($nextFiles);
    sort($layer);
    $layers[] = $layer;
    $current = $layer;
}

// Accordion slice
$accordion = array_values(array_filter($components, fn($c) => stripos($c['file'], '/Accordion') !== false || preg_match('/accordion/i', $c['file'])));

$styleStaticCounts = [];
$filesWithBound = 0;
foreach ($components as $c) {
    foreach ($c['template_classes']['static'] as $cls) {
        $styleStaticCounts[$cls] = ($styleStaticCounts[$cls] ?? 0) + 1;
    }
    if ($c['template_classes']['bound']) $filesWithBound++;
}
arsort($styleStaticCounts);

$out = [
    'components' => $components,
    'ts_modules' => $tsmods,
    'primitive' => [
        'import_paths'   => $primitiveRoots,
        'direct_users'   => $primitiveUsers,
        'reachability_layers' => $layers,
    ],
    'style_observations' => [
        'static_classname_counts' => array_slice(array_map(fn($k,$v)=>[$k,$v], array_keys($styleStaticCounts), array_values($styleStaticCounts)), 0, 50),
        'files_with_bound_class' => $filesWithBound,
        'headless_hypothesis' => 'Likely headless; minimal fixed classes in templates.',
    ],
    'accordion_family' => $accordion,
];

file_put_contents($scrapeOut, json_encode($out, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
echo "Wrote API file: " . $scrapeOut . PHP_EOL;
