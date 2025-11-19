<?php
declare(strict_types=1);

function build_components(array $json, string $destRoot): array
{
    @mkdir($destRoot, 0777, true);
    @mkdir($destRoot . '/Primitives', 0777, true);
    $tpl = "<?php\nreturn function(array $props=[], ?callable $slot=null){return '<div></div>';};\n";
    $count = 0;
    foreach ($json['components'] ?? [] as $c) {
        $dir = $destRoot . '/' . preg_replace('/[^a-zA-Z0-9]+/', '', $c['component']);
        @mkdir($dir, 0777, true);
        file_put_contents($dir . '/x-' . strtolower($c['component']) . '.view.php', $tpl);
        $count++;
    }
    return ['files' => $count];
}
