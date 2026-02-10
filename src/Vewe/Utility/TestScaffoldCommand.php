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

final class TestScaffoldCommand
{
    private string $collectPath = '';

    private string $depositPath = '';

    public function __construct(
        private readonly Console $console,
        private readonly ConsoleArgumentBag $consoleArgumentBag,
    ) {
        $this->collectPath = root_path('packages/ui/src/Theme/Base/');

        $this->depositPath = root_path('packages/ui/tests/Theme/Base/');
    }

    #[ConsoleCommand(
        name: 'vewe:testscaffold',
        description: 'Scaffold tests',
        aliases: ['vewe:testscaf'],
    )]
    public function __invoke(): ExitCode
    {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->collectPath, RecursiveDirectoryIterator::SKIP_DOTS),
        );

        $filecount = 0;

        foreach ($iterator as $file) {
            // For testing just run this against Button, initially
            // if (! in_array($file->getBasename(), ['ABaseTheme.php'])) {
            //     // Skip this file
            //     continue;
            // }

            // This is convoluted but required to handle the subfolders
            $targetPath = $this->depositPath . str_replace($this->collectPath, '', $file->getPath()) . '/';
            $targetPath .= Str\to_pascal_case(str_replace('.' . $file->getExtension(), '', $file->getFileName()));
            str_ends_with($file->getPath(), '/prose') ? ($targetPath = str_replace('/prose', '/Prose', $targetPath)) : '';
            $targetPath .= 'Test.php';

            // Prepare array
            $replacements = [];

            // Namespace
            $replacements['namespace Vewe\Stubs'] = 'namespace Vewe\Ui\Tests\Theme\Base' . (str_ends_with($file->getPath(), '/Prose') ? '\Prose' : '');

            // Get class name from file
            $className = Str\to_pascal_case(str_replace('.' . $file->getExtension(), '', $file->getBaseName()));

            // Use statement
            $replacements['use Vewe\Ui\Theme\Base\BaseThemeStub'] = 'use Vewe\Ui\Theme\Base\\' . (str_ends_with($file->getPath(), '/Prose') ? 'Prose\\' : '') . $className;

            // Class name
            $replacements['final class BaseThemeTestStub'] = "final class {$className}Test";

            // Set stubfile
            $stubFile = root_path('src/Vewe/Stubs/BaseThemeTestStub.stub.php');

            // Try to load and instantiate the class file
            require_once $file->getPathname();
            $fqcn = "Vewe\\Ui\\Theme\\Base\\" . (str_ends_with($file->getPath(), '/Prose') ? 'Prose\\' : '') . $className;

            if (! class_exists($fqcn)) {
                $this->console->error("Failed instantiating {$fqcn}");
                continue;
            }

            $slotTests = $this->getSlotTests($fqcn);
            $variantTests = $this->getVariantTests($fqcn);
            $compoundVariantTests = $this->getCompoundVariantTests($fqcn);
            //$defaultVariantTests = $this->getDefaultVariantTests($fqcn);

            $replacements["\n    // SLOTS_TESTS_PLACEHOLDER"] = is_string($slotTests)
                ? $this->makePlaceholder('slot', $slotTests)
                : '';

            $replacements["\n    // VARIANT_TESTS_PLACEHOLDER"] = is_string($variantTests)
                ? $this->makePlaceholder('variant', $variantTests)
                : '';

            $replacements["\n    // COMPOUND_VARIANT_TESTS_PLACEHOLDER"] = is_string($compoundVariantTests)
                ? $this->makePlaceholder('compound_variant', $compoundVariantTests)
                : '';

            //$replacements['// DEFAULT_VARIANT_TESTS_PLACEHOLDER'] = is_string($defaultVariantTests) ? $this->makePlaceholder('default_variant', $variantTests) : '';

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

    private function makePlaceholder(string $testName, string $tests): string
    {
        $indent = '    ';

        $return = "{$indent}#[Test]\n";
        $return .= "{$indent}public function {$testName}_tests(): void\n";
        $return .= "{$indent}{\n";
        $return .= $tests;
        $return .= "{$indent}}\n";

        return $return;
    }

    private function makeTest(string $expected, string $comparison, string $comment = ''): string
    {
        $indent = '    ';

        $return = $comment != '' ? "{$indent}{$indent}// {$comment}\n" : '';
        $return .= "{$indent}{$indent}\$this->assertSame(\n";
        $return .= "{$indent}{$indent}{$indent}{$expected},\n";
        $return .= "{$indent}{$indent}{$indent}{$comparison},\n";
        $return .= "{$indent}{$indent});\n";

        return "\n" . $return;
    }

    private function getSlotTests(string $fqcn): string|bool
    {
        $cn = str_replace(["Vewe\\Ui\\Theme\\Base\\Prose\\", "Vewe\\Ui\\Theme\\Base\\"], '', $fqcn);
        $instance = new $fqcn();
        $slotNames = array_keys($instance->slots->toArray());

        if (count($slotNames) < 1) {
            return false;
        }

        $return = '';

        foreach ($slotNames as $key => $slotName) {
            if ($slotName == 'base') {
                $return .= $this->makeTest(
                    expected: '"' . $fqcn::make() . '"',
                    comparison: "{$cn}::make(slot: 'base')",
                    comment: 'Ensure that the default assignment of base matches slot base',
                );
            }
            $return .= $this->makeTest(
                expected: '"' . $fqcn::make(slot: $slotName) . '"',
                comparison: "{$cn}::make(slot: '{$slotName}')",
                comment: 'Ensure the named slot is retrieved correctly',
            );
        }

        return $return;
    }

    private function getVariantTests(string $fqcn): string|bool
    {
        // Recursive function to combine variants
        $cn = str_replace(["Vewe\\Ui\\Theme\\Base\\Prose\\", "Vewe\\Ui\\Theme\\Base\\"], '', $fqcn);
        $instance = new $fqcn();
        /** @var array<array-key, string|bool|array<array-key, string|bool|array<array-key, string>>> $variants */
        $variants = $instance->variants->toArray();

        if (count($variants) < 1) {
            return false;
        }

        $return = '';

        foreach ($variants as $categoryName => $category) {
            // e.g. fieldGroup, color, variant, etc
            foreach ($category as $variant => $slotClass) {
                if (is_array($slotClass)) {
                    foreach ($slotClass as $slotName => $value) {
                        $testCategory = $categoryName;
                        $testVariant = $variant;

                        $expected = $fqcn::make(props: [$testCategory => $testVariant], slot: $slotName);

                        $return .= $this->makeTest(
                            expected: '"' . $expected . '"',
                            comparison: "{$cn}::make(props: ['{$testCategory}' => '{$testVariant}'], slot: '{$slotName}')",
                            comment: 'Ensure the variant for the named slot is retrieved correctly',
                        );

                        if ($testCategory == 'color' && $testVariant == 'primary') {
                            $testVariant = 'secondary';

                            $expected = $fqcn::make(props: [$testCategory => $testVariant], slot: $slotName);

                            $return .= $this->makeTest(
                                expected: '"' . $expected . '"',
                                comparison: "{$cn}::make(props: ['{$testCategory}' => '{$testVariant}'], slot: '{$slotName}')",
                                comment: 'Ensure the variant for the named slot is retrieved correctly',
                            );
                        }
                        unset($testCategory);
                        unset($testVariant);
                    }
                }
            }
        }

        return $return;
    }

    private function getCompoundVariantTests(string $fqcn): string|bool
    {
        // Recursive function to combine variants
        $cn = str_replace(["Vewe\\Ui\\Theme\\Base\\Prose\\", "Vewe\\Ui\\Theme\\Base\\"], '', $fqcn);
        $instance = new $fqcn();
        /** @var array<array-key, string|bool|array<array-key, string|bool|array<array-key, string>>> $compoundVariants */
        $compoundVariants = $instance->compoundVariants->toArray();

        if (count($compoundVariants) < 1) {
            return false;
        }

        $return = '';

        foreach ($compoundVariants as $compoundVariant) {
            $props = [];
            $slots = [];
            foreach ($compoundVariant as $cvKey => $cvVal) {
                if ($cvKey == 'class') {
                    if (is_array($cvVal)) {
                        $slots = array_keys($cvVal);
                    } else {
                        $slots[] = 'base';
                    }
                } else {
                    // At this point $cvVal may be an array
                    $props[$cvKey] = $cvVal;
                }
            }

            // Generate all combinations of props where values might be arrays
            $propCombinations = $this->makeCompoundVariantCombinations($props);

            foreach ($propCombinations as $propsVariant) {
                foreach ($slots as $slotName) {
                    $expected = $fqcn::make(props: $propsVariant, slot: $slotName);

                    $propString = implode(', ', array_map(
                        fn ($key, $value) => is_bool($value)
                            ? "'$key' => " . ($value ? 'true' : 'false')
                            : "'$key' => '$value'",
                        array_keys($propsVariant),
                        array_values($propsVariant),
                    ));

                    $return .= $this->makeTest(
                        expected: "'{$expected}'",
                        comparison: "{$cn}::make(props: [{$propString}], slot: '{$slotName}')",
                        comment: 'Ensure the compoundVariant for the named slot is retrieved correctly',
                    );
                }
            }
        }

        return $return;
    }

    /**
     * @param array<string, string|bool|array<int, string>> $props
     * @return array<int, array<string, string|bool>>
     */
    private function makeCompoundVariantCombinations(array $props): array
    {
        $keys = array_keys($props);
        $values = array_values($props);

        // Convert non-array values to single-element arrays for consistent processing
        $normalizedValues = array_map(
            fn ($value) => is_array($value) ? $value : [$value],
            $values,
        );

        // Generate cartesian product
        $combinations = [[]];
        foreach ($normalizedValues as $index => $valueSet) {
            $newCombinations = [];
            foreach ($combinations as $combination) {
                foreach ($valueSet as $value) {
                    $newCombinations[] = array_merge($combination, [$keys[$index] => $value]);
                }
            }
            $combinations = $newCombinations;
        }

        return $combinations;
    }

    private function getDefaultVariantTests(string $fqcn): string|bool
    {
        $cn = str_replace(["Vewe\\Ui\\Theme\\Base\\Prose\\", "Vewe\\Ui\\Theme\\Base\\"], '', $fqcn);
        $instance = new $fqcn();
        $slotNames = array_keys($instance->slots->toArray());
        $defaultVariants = $instance->defaultVariants->toArray();

        if (count($defaultVariants) < 1) {
            return false;
        }

        $return = '';

        foreach ($defaultVariants as $prop => $propVal) {
            foreach ($slotNames as $key => $slotName) {
                if ($slotName == 'base') {
                    $return .= $this->makeTest(
                        expected: "'" . $fqcn::make() . "'",
                        comparison: "{$cn}::make(slot: 'base')",
                        comment: 'Ensure that the default assignment of base matches slot base',
                    );
                }
                $return .= $this->makeTest(
                    expected: "'" . $fqcn::make(slot: $slotName) . "'",
                    comparison: "{$cn}::make(slot: '{$slotName}')",
                    comment: 'Ensure the named slot is retrieved correctly',
                );
            }
        }

        return $return;
    }
}
