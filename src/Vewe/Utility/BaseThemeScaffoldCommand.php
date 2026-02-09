<?php

declare(strict_types=1);

namespace Vewe\Utility;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Tempest\Console\Console;
use Tempest\Console\ConsoleArgument;
use Tempest\Console\ConsoleCommand;
use Tempest\Console\ExitCode;
use Tempest\Console\Input\ConsoleArgumentBag;
use Tempest\Support\Str;

use function Tempest\root_path;

final class BaseThemeScaffoldCommand
{
    private string $collectPath = '';

    private string $depositPath = '';

    public function __construct(
        private readonly Console $console,
        private readonly ConsoleArgumentBag $consoleArgumentBag,
    ) {
        $this->collectPath = root_path('src/JsonTheme/');

        $this->depositPath = root_path('packages/ui/src/Theme/Base/');
    }

    #[ConsoleCommand(
        name: 'vewe:basethemescaffold',
        description: 'Convert Nuxt-UI theme into Vewe CVA classes',
        aliases: ['vewe:btscaf'],
    )]
    public function __invoke(): ExitCode
    {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->collectPath, RecursiveDirectoryIterator::SKIP_DOTS),
        );

        $filecount = 0;

        foreach ($iterator as $file) {
            // Skip the content files for now, as that's specific to nuxt-content
            if (str_ends_with($file->getPath(), '/content')) {
                continue;
            }

            if (in_array($file->getBasename(), ['icons.json'])) {
                // Skip this file
                continue;
            }

            // This is convoluted but required to handle the subfolders
            $targetPath = $this->depositPath . str_replace($this->collectPath, '', $file->getPath()) . '/';
            $targetPath .= Str\to_pascal_case(str_replace('.' . $file->getExtension(), '', $file->getFileName()));
            str_ends_with($file->getPath(), '/prose') ? ($targetPath = str_replace('/prose', '/Prose', $targetPath)) : '';
            $targetPath .= 'BaseTheme.php';

            // Prepare array
            $replacements = [];

            // Namespace
            $replacements['namespace Vewe\Stubs'] = 'namespace Vewe\Ui\Theme\Base' . (str_ends_with($file->getPath(), '/prose') ? '\Prose' : '');

            // Class name
            $replacements['final class BaseThemeStub'] = 'final class ' . Str\to_pascal_case(str_replace('.' . $file->getExtension(), '', $file->getBaseName()) . 'BaseTheme');

            // Set stubfile
            $stubFile = root_path('src/Vewe/Stubs/BaseThemeStub.stub.php');

            // Get the file
            /** @var string $inputFile */
            $inputFile = file_get_contents($file->getPathName());

            if (str_contains($inputFile, '"import": "(fieldGroupVariant)"') === true) {
                $replacements['use Vewe\Ui\Theme\Theme;'] = "use Vewe\Ui\Theme\Theme;\nuse Vewe\Ui\Theme\Base\FieldGroupBaseTheme;";
            }

            if (str_contains($inputFile, '"import": "(fieldGroupVariantWithRoot)"') === true) {
                $replacements['use Vewe\Ui\Theme\Theme;'] = "use Vewe\Ui\Theme\Theme;\nuse Vewe\Ui\Theme\Base\FieldGroupRootBaseTheme;";
            }

            if (str_contains($inputFile, '"mergeWith": "input') === true) {
                $replacements['use Vewe\Ui\Theme\Theme;'] = "use Vewe\Ui\Theme\Theme;\nuse Vewe\Ui\Theme\Base\InputBaseTheme;";
                $stubFile = root_path('src/Vewe/Stubs/MergeBaseThemeStub.stub.php');
            }

            if (str_contains($inputFile, '"mergeWith": "select') === true) {
                $replacements['use Vewe\Ui\Theme\Theme;'] = "use Vewe\Ui\Theme\Theme;\nuse Vewe\Ui\Theme\Base\SelectBaseTheme;";
                $stubFile = root_path('src/Vewe/Stubs/MergeBaseThemeStub.stub.php');
            }

            // Json decode into array
            $json = json_decode($inputFile, true);

            // Check if we need to mergeWith another
            if (isset($json['mergeWith'])) {
                if ((string) $json['mergeWith'] == 'select') {
                    $replacements['new InputBaseTheme()'] = 'new SelectBaseTheme()';
                }
                unset($json['mergeWith']);
            }

            // Check if we need to replace anything
            if (isset($json['replace'])) {
                $replacements["'needle'"] = "'" . (string) $json['replace'] . "'";
                $stubFile = root_path('src/Vewe/Stubs/ReplaceMergeBaseThemeStub.stub.php');
                unset($json['replace']);
            }
            if (isset($json['replaceWith'])) {
                $replacements["'replaceWith'"] = "'" . (string) $json['replaceWith'] . "'";
                unset($json['replaceWith']);
            }

            // Render data from JsonTheme
            foreach ([
                'slots' => 'PHslots',
                'variants' => 'PHvariants',
                'compoundVariants' => 'PHcompoundVariants',
                'defaultVariants' => 'PHdefaultVariants',
            ] as $key => $value) {
                if (isset($json[$key])) {
                    $replacements["['{$value}']"] = $this->stringify($json[$key]);
                } else {
                    $replacements["['{$value}']"] = '[]';
                }
            }

            $replacements["'fieldGroupVariant' => [\n                    'import' => '(fieldGroupVariant)',\n                ],"] = "'fieldGroup' => (new FieldGroupBaseTheme())->variants['fieldGroup'],";

            $replacements["'fieldGroupVariantWithRoot' => [\n                    'import' => '(fieldGroupVariantWithRoot)',\n                ],"] = "'fieldGroup' => (new FieldGroupRootBaseTheme())->variants['fieldGroup'],";

            // I should probably regex this later
            $replacements["'(new InputBaseTheme())->variants[\\'size\\'][\\'xs\\'][\\'base\\'] . \\'gap-0.25\\''"] = "(new InputBaseTheme())->variants['size']['xs']['base'] ?? '' . 'gap-0.25'";
            $replacements["'(new InputBaseTheme())->variants[\\'size\\'][\\'sm\\'][\\'base\\'] . \\'gap-0.5\\''"] = "(new InputBaseTheme())->variants['size']['sm']['base'] ?? '' . 'gap-0.5'";
            $replacements["'(new InputBaseTheme())->variants[\\'size\\'][\\'md\\'][\\'base\\'] . \\'gap-0.5\\''"] = "(new InputBaseTheme())->variants['size']['md']['base'] ?? '' . 'gap-0.5'";
            $replacements["'(new InputBaseTheme())->variants[\\'size\\'][\\'lg\\'][\\'base\\'] . \\'gap-0.75\\''"] = "(new InputBaseTheme())->variants['size']['lg']['base'] ?? '' . 'gap-0.75'";
            $replacements["'(new InputBaseTheme())->variants[\\'size\\'][\\'xl\\'][\\'base\\'] . \\'gap-0.75\\''"] = "(new InputBaseTheme())->variants['size']['xl']['base'] ?? '' . 'gap-0.75'";

            $stubFile = $this->publish(
                stubFile: $stubFile,
                targetPath: $targetPath,
                replacements: $replacements,
            );

            if (is_numeric($stubFile)) {
                $filecount++;
            } else {
                $this->console->error("Failed writing {$targetPath}");
            }
        }

        $this->console->info("Success - {$filecount} files written");
        return Exitcode::SUCCESS;
    }

    /**
     * @param array<string,string> $replacements
     */
    private function publish(string $stubFile, string $targetPath, array $replacements): int|bool
    {
        /** @var string $stub */
        $stub = file_get_contents($stubFile);
        foreach ($replacements as $key => $value) {
            $stub = str_replace($key, $value, $stub);
        }
        return file_put_contents($targetPath, $stub);
    }

    private function stringify(mixed $value, int $depth = 3): string
    {
        $indent = str_repeat('    ', $depth);
        $nextIndent = str_repeat('    ', $depth + 1);

        // STRING
        if (is_string($value)) {
            return $value === '' ? "''" : "'" . addslashes($value) . "'";
        }

        // BOOLEAN
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        // NULL
        if (is_null($value)) {
            return 'null';
        }

        // NUMBER
        if (is_numeric($value)) {
            return (string) $value;
        }

        // NOT AN ARRAY
        if (! is_array($value)) {
            return "'" . addslashes((string) $value) . "'";
        }

        // EMPTY ARRAY
        if (empty($value)) {
            return '[]';
        }

        // CHECK IF SEQUENTIAL [0, 1, 2, ...] OR ASSOCIATIVE ['key' => value]
        $isSequential = array_keys($value) === range(0, count($value) - 1);

        // BUILD LINES
        $lines = [];
        foreach ($value as $key => $item) {
            $formattedValue = $this->stringify($item, $depth + 1);

            if ($isSequential) {
                // Sequential array: no keys
                $lines[] = $nextIndent . $formattedValue . ',';
            } else {
                // Associative array: with keys
                $quotedKey = is_string($key) ? "'$key'" : $key;
                $lines[] = $nextIndent . $quotedKey . ' => ' . $formattedValue . ',';
            }
        }

        return "[\n" . implode("\n", $lines) . "\n" . $indent . ']';
    }
}
