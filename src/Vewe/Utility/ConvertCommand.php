<?php

namespace Vewe\Utility;

use Tempest\Console\Console;
use Tempest\Console\ConsoleCommand;
use Tempest\Console\ExitCode;
use Tempest\Console\Input\ConsoleArgumentBag;
use Tempest\Core\PublishesFiles;
use Tempest\Support\Str;

use function Tempest\src_path;

final class ConvertCommand
{
    use PublishesFiles;

    public string $componentName = '';

    public function __construct(
        private readonly Console $console,
        private readonly ConsoleArgumentBag $consoleArgumentBag,
    ) {}

    #[ConsoleCommand(
        name: 'vewe:convert',
        description: 'Convert Nuxt-UI theme into Vewe CVA classes',
        aliases: ['vewe:conv', 've:co'],
    )]
    public function __invoke(
        #[ConsoleArgument(description: 'Specifies the component to convert')]
        string $name,
    ): ExitCode {
        $this->componentName = $name;

        $inputFile = $this->wrapInputPath($this->componentName);
        $outputFile = src_path("Views/Components/x-{$this->componentName}.stub.php");

        if (! file_exists($inputFile)) {
            $this->console->error("Error: Input file {$inputFile} not found");
            return Exitcode::ERROR;
        }

        // Assemble a list of files to grab, some are nested so we need to merge the data
        $filesToGet = $this->findMergeFiles($inputFile);

        $data = [];
        // Grab the files, convert and merge
        foreach (array_reverse($filesToGet) as $fileToGet) {
            $data = $this->recursiveArrayMerge($data, $this->cleanInput(file_get_contents($fileToGet)));
        }

        file_put_contents(__DIR__ . "/{$this->componentName}.json", json_encode($data, true));

        // Re-format the array
        $pivot = $this->cleanArrayData($data);

        // Build the stub
        $output = $this->buildStub($pivot);

        // Write file and call it a day folks
        file_put_contents($outputFile, $output);
        $this->console->info("Success: {$outputFile} written");
        return Exitcode::SUCCESS;
    }

    /* ************************************* */
    /*  TODO: make dynamic path helper.      */
    /* ************************************* */
    private function wrapInputPath(string $file): string
    {
        return "/Users/iamdadmin/Dev/ui/src/theme/{$file}.ts";
    }

    /* ************************************* */
    /*  Recursive FileList for inheritance   */
    /* ************************************* */
    private function findMergeFiles(string $filePath, array &$processed = []): array
    {
        // Avoid processing the same file twice
        if (in_array($filePath, $processed)) {
            return [];
        }

        $processed[] = $filePath;
        $mergeFiles = [$filePath]; // Include the current file

        if (! file_exists($filePath)) {
            return $mergeFiles;
        }

        $contents = file_get_contents($filePath);
        $lines = explode("\n", $contents);

        foreach ($lines as $line) {
            if (preg_match('/^\s*}\s*,\s*(\w+)\(options\)\)/', $line, $matches)) {
                $verb = $matches[1];
                $dependencyPath = $this->wrapInputPath($verb);

                // Recursively check this file for more dependencies
                $nestedFiles = $this->findMergeFiles($dependencyPath, $processed);
                $mergeFiles = array_merge($mergeFiles, $nestedFiles);
            }
        }

        return $mergeFiles;
    }

    /* ************************************* */
    /*  Recursive Array Merge                */
    /* ************************************* */
    private function recursiveArrayMerge(array $array1, array $array2): array
    {
        $merged = $array1;

        foreach ($array2 as $key => $value) {
            if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                // Both are arrays, merge recursively
                $merged[$key] = $this->recursiveArrayMerge($merged[$key], $value);
            } else {
                // Overwrite or add the value
                $merged[$key] = $value;
            }
        }

        return $merged;
    }

    /* ************************************* */
    /*  Clean up the input file              */
    /* ************************************* */
    private function cleanInput(string $content): array
    {
        // Remove specified lines
        $content = preg_replace("/^import\s+.*\n/m", '', $content);
        $content = preg_replace("/^export default\s+.*\n/m", '', $content);
        $content = preg_replace("/\s*return defu\(\{\n/", '', $content);
        $content = preg_replace("/, options.theme.transitions \&\& \'transition-colors\'/", '', $content);
        $content = preg_replace("/\s*\.\.\.field.+Variant.*,/", '', $content);
        // This one is specific to items with borders
        $content = str_replace(
            '...Object.fromEntries((options.theme.colors || []).map((color: string) => [color, { border: `border-${color}` }])),',
            '"$color": { "border": "border-$color" },',
            $content,
        );
        $content = preg_replace(
            "/\s*\.\.\.Object\.fromEntries\(\(options\.theme\.colors \|\| \[\]\)\.map\(\(color: string\) => \[color, ''\]\)\),\n/",
            '',
            $content,
        );
        $content = preg_replace("/\s*\}, input\(options\)\)\n\}\n/", '', $content);
        $content = preg_replace("/\s*color: {\s*neutral: \'\'\n\s*\},/", '', $content);

        // Transform inline objects with single property to multi-line format
        $content = preg_replace(
            "/^(\s*)([a-zA-Z_][a-zA-Z0-9_]*)\s*:\s*\{\s*([a-zA-Z_][a-zA-Z0-9_]*)\s*:\s*'([^']+)'\s*\}(,?)\n/m",
            "$1$2:\n$1{\n$1  \"$3\": \"$4\"\n$1}$5\n",
            $content,
        );

        // Replace spread operator patterns with proper object syntax
        $content = preg_replace(
            "/\[\.\.\.\(options\.theme\.colors \|\| \[\]\)\.map\(\(color: string\) => \(\{\s*\n\s+color,\n/",
            "[\n  {\n    color: \$color,\n",
            $content,
        );

        // Replace closing pattern
        $content = preg_replace(
            "/\)\), \.\.\.\(options\.theme\.colors \|\| \[\]\)\.map\(\(color: string\) => \(\{\s*\n\s+color,\n/",
            ",\n  {\n    color: \$color,\n",
            $content,
        );

        $content = str_replace(')), ', ', ', $content);

        // Handle array conversion
        $content = preg_replace_callback(
            "/\[([^\]]+)\]/",
            function ($matches) {
                $inner = trim($matches[1]);

                // Check if multi-element (contains comma)
                if (strpos($inner, ',') !== false) {
                    // Multi-element: convert single quotes to double quotes for JSON
                    return '[' . str_replace("'", '"', $inner) . ']';
                } else {
                    // Single element: unwrap - remove brackets and keep the string as-is
                    return $inner;
                }
            },
            $content,
        );

        // Wrap array keys in double quotes (only keys, not content inside strings)
        $content = preg_replace("/^(\s*)([a-zA-Z_][a-zA-Z0-9_]*)\s*:/m", '$1"$2":', $content);

        // Replace backticks with single quotes
        $content = str_replace('`', "'", $content);

        $content = str_replace('-${color}', '-$color', $content);
        $content = str_replace(': $color', ': "$color"', $content);

        $content = str_replace("\n})\n", "\n", $content);

        // Replace single quotes with double
        $content = str_replace("'", "\"", $content);

        // There's only a few places that need this
        $content = str_replace("content-\"*\"", "content-['*']", $content);
        $content = str_replace("content-\".\"", "content-['.']", $content);
        $content = str_replace('data-state=completed', 'data-[state=completed]', $content);
        $content = str_replace('data-state=active', 'data-[state=active]', $content);

        // Only wrap if not already properly closed
        if (! preg_match("/\}\s*\n\}\s*$/", $content)) {
            $content = "{\n{$content}\n}";
        } else {
            $content = "{\n{$content}";
        }

        // Decode JSON
        $data = json_decode($content, true);

        if ($data === null) {
            $this->console->error("Error: Failed to convert {$this->componentName} to JSON, " . json_last_error_msg());
            exit();
        }

        return $data;
    }

    /* ************************************* */
    /*  Re-format the arrays                 */
    /* ************************************* */
    private function cleanArrayData(array $data): array
    {
        // Process slots
        $slots = $data['slots'];
        $variants = $data['variants'] ?? [];
        $compoundVariants = $data['compoundVariants'] ?? [];

        $pivot = [];

        // Default class per slot
        foreach ($slots as $slotName => $slotData) {
            $pivot[$slotName]['standard'] = $slotData;
        }
        unset($slotName);
        unset($slotData);

        // Variants
        if (count($variants) > 0) {
            foreach ($variants as $variantKey => $variantData) {
                if ($variantKey == 'size') {
                    foreach ($variantData as $size => $sizeClass) {
                        if (is_string($sizeClass)) {
                            $pivot['base']['variants']['size'][$size] = $sizeClass;
                            continue;
                        }
                        if (is_array($variantData)) {
                            foreach ($sizeClass as $slotName => $slotData) {
                                $pivot[$slotName]['variants']['size'][$size] = $slotData;
                            }
                            unset($slotName);
                            unset($slotData);
                            continue;
                        }
                        unset($size);
                        unset($sizeClass);
                        continue;
                    }
                } else {
                    // non-size
                    foreach ($variantData as $variant => $variantClass) {
                        // At this level, if it's a string, apply it to base, but if it's an array, apply it to slot
                        if (is_string($variantClass)) {
                            $pivot['base']['variants'][$variantKey][$variant] = $variantClass;
                        } elseif (is_array($variantClass)) {
                            // At this level, $key will be a slot and $value the class
                            foreach ($variantClass as $key => $value) {
                                $pivot[$key]['variants'][$variantKey][$variant] = $value;
                            }
                            unset($key);
                            unset($value);
                        }
                    }
                }
            }
        }

        // Compound Variants
        if (count($compoundVariants) > 0) {
            foreach ($compoundVariants as $compoundVariant) {
                $keys = array_keys($compoundVariant);

                if (is_array($compoundVariant['class'])) {
                    // There's multiple slots
                    foreach ($compoundVariant['class'] as $slotName => $classData) {
                        $merge = [];
                        foreach ($keys as $key) {
                            $merge[$key] = $compoundVariant[$key];
                        }
                        $merge['class'] = $classData;
                        $pivot[$slotName]['compoundVariants'][] = $merge;
                        unset($merge);
                    }
                    unset($slotName);
                    unset($classData);
                    unset($key);
                } else {
                    // There's only base
                    $merge = [];
                    foreach ($keys as $key) {
                        foreach ($keys as $key) {
                            $merge[$key] = $compoundVariant[$key];
                        }
                    }
                    $pivot['base']['compoundVariants'][] = $merge;
                    unset($merge);
                    unset($key);
                }
            }
        }

        // defaultVariant only applied to base slot, if it exists at all
        $pivot['base']['defaultVariant'] = $data['defaultVariants'] ?? [];

        unset($data);
        unset($slots);
        unset($variants);
        unset($compoundVariants);

        return $pivot;
    }

    /* ************************************* */
    /*  And finally, build the stub          */
    /* ************************************* */
    private function buildStub(array $pivot): string
    {
        $output = "<?php\n\n";
        $output .= "use FeatureNinja\\Cva\\ClassVarianceAuthority;\n\n";
        $output .= "?>\n";

        foreach ($pivot as $slotName => $slotData) {
            $output .= '<x-' . Str\to_kebab_case($this->componentName) . "-{$slotName}\n";
            $output .= "    :class=\"(fn(\$color) => ClassVarianceAuthority::new(\n";
            $output .= "        ['" . (isset($slotData['standard']) ? $slotData['standard'] : '') . "'],\n";
            $output .= '        [';
            if (isset($slotData['variants']) && count($slotData['variants']) > 0) {
                // Remove any variants we don't want
                foreach (['autoresize', 'loading'] as $unsetter) {
                    if (isset($slotData['variants'][$unsetter])) {
                        unset($slotData['variants'][$unsetter]);
                    }
                }
                unset($unsetter);
            }
            if (isset($slotData['variants']) && count($slotData['variants']) > 0) {
                $output .= "\n            'variants' => [\n";
                foreach ($slotData['variants'] as $variantName => $variantData) {
                    $output .= "                '{$variantName}' => [\n";
                    foreach ($variantData as $key => $value) {
                        $output .= "                    '{$key}' => '$value',\n";
                    }
                    $output .= "                ],\n";
                    unset($key);
                    unset($value);
                }
                unset($variantName);
                unset($variantData);
                $output .= "            ],\n";
            }
            if (isset($slotData['compoundVariants']) && count($slotData['compoundVariants']) > 0) {
                foreach ($slotData['compoundVariants'] as $compoundVariantName => $compoundVariantData) {
                    // Remove any variants we don't want
                    foreach (['autoresize', 'loading'] as $unsetter) {
                        if (isset($slotData['compoundVariants'][$compoundVariantName][$unsetter])) {
                            unset($slotData['compoundVariants'][$compoundVariantName]);
                        }
                    }
                    unset($unsetter);
                }
            }
            if (isset($slotData['compoundVariants']) && count($slotData['compoundVariants']) > 0) {
                $output .= "            'compoundVariants' => [\n";
                foreach ($slotData['compoundVariants'] as $compoundVariantName => $compoundVariantData) {
                    $output .= "                [\n";
                    foreach ($compoundVariantData as $key => $value) {
                        if ($key == 'color') {
                            if ($value == '$color') {
                                $output .= "                    '{$key}' => {$value},\n";
                            } else {
                                $output .= "                    '{$key}' => '{$value}',\n";
                            }
                            continue;
                        }
                        if ($key == 'class') {
                            $classOut = str_replace("-\$color", "-'. \$color .'", $value);
                            $classOut = preg_replace("/color \.\'\'$/", 'color', "'{$classOut}'");
                            $output .= "                    '{$key}' => {$classOut},\n";
                            unset($classOut);
                            continue;
                        }
                        if (is_array($value)) {
                            $output .= "                    '{$key}' => ['" . implode("', '", $value) . "'],\n";
                            continue;
                        }
                        if (is_bool($value)) {
                            $boolString = $value ? 'true' : 'false';
                            $output .= "                    '{$key}' => {$boolString},\n";
                            unset($boolString);
                            continue;
                        }
                        if (is_string($value)) {
                            $output .= "                    '{$key}' => '{$value}',\n";
                        }
                    }
                    $output .= "                ],\n";
                    unset($key);
                    unset($value);
                }
                unset($compoundVariantName);
                unset($compoundVariantData);
                $output .= "            ],\n";
            }

            // Remove the compoundVariants entry if it's blank
            // $output = preg_replace("/\n\s*'compoundVariants' => \[\n\s*\[\n\s*\],\n\s*\],/", '', $output);

            if ($slotName == 'base') {
                $output .= "            'defaultVariants' => [\n";
                $output .= "                'color' => \$color,\n";
                $output .= "                'variant' => 'solid',\n";
                $output .= "                'size' => 'md',\n";
                $output .= "            ],\n";
            }
            $output .= "        ],\n";

            $output .= "        )([\n";
            $output .= "            'color' => \$color,\n";

            $defaults = [
                'size' => '\'md\'',
                'square' => 'false',
                'block' => 'false',
            ];

            if (isset($slotData['variants']) && count($slotData['variants']) > 0) {
                foreach ($slotData['variants'] as $defKey => $defVal) {
                    if ($defVal == 'true' || $defVal == 'false') {
                        $fallbackValue = 'false';
                    } else {
                        $fallbackValue = $defaults[$defKey] ?? "''";
                    }
                    if ($defKey == 'leading') {
                        $fallbackKey = "{$defKey}Icon ?? \${$defKey}Avatar";
                    } elseif ($defKey == 'trailing') {
                        $fallbackKey = "{$defKey}Icon";
                    } else {
                        $fallbackKey = $defKey;
                    }
                    $output .= "            '{$defKey}' => \${$fallbackKey} ?? {$fallbackValue},\n";
                }
            }

            $output .= "        ]))(\$color ?? 'primary')\"\n";
            $output .= "    />\n";
        }

        return $output;
    }
}
