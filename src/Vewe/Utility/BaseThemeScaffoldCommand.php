<?php

declare(strict_types=1);

namespace Vewe\Utility;

use InvalidArgumentException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Tempest\Console\Console;
use Tempest\Console\ConsoleArgument;
use Tempest\Console\ConsoleCommand;
use Tempest\Console\ExitCode;
use Tempest\Console\Input\ConsoleArgumentBag;
use Tempest\Core\PublishesFiles;
use Tempest\Generation\DataObjects\StubFile;
use Tempest\Generation\Enums\StubFileType;
use Tempest\Generation\Exceptions\FileGenerationFailedException;
use Tempest\Generation\Exceptions\FileGenerationWasAborted;
use Tempest\Support\Str;
use Vewe\Stubs\BaseThemeStub;

use function Tempest\root_path;

final class BaseThemeScaffoldCommand
{
    use PublishesFiles;

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

            // TODO: remove after testing
            if ($file->getFileName() != 'a.json') {
                continue;
            }

            // Get the file
            $inputFile = file_get_contents($file->getPathName());

            // Json decode into array
            $json = json_decode($inputFile, true);

            // This is convoluted but required to handle the subfolders
            $targetPath = $this->depositPath . str_replace($this->collectPath, '', $file->getPath()) . '/';
            $targetPath .= Str\to_pascal_case(str_replace('.' . $file->getExtension(), '', $file->getFileName()));
            $targetPath .= '.php';

            try {
                $replacements = [];

                foreach (['slots' => 'SLOTS', 'variants' => 'VARIANTS', 'compoundVariants' => 'COMPOUND_VARIANTS', 'defaultVariants' => 'DEFAULT_VARIANTS'] as $key => $value) {
                    if (isset($json[$key]) && count($json[$key]) > 0) {
                        $replacements['array ' . $value . ' = []'] = 'array ' . $value . ' = ' . $this->stringify($json['slots']);
                    }
                }

                $shouldOverride = $this->askForOverride($targetPath);

                $stubFile = $this->stubFileGenerator->generateClassFile(
                    stubFile: StubFile::from(BaseThemeStub::class),
                    targetPath: $targetPath,
                    shouldOverride: $shouldOverride,
                    replacements: $replacements,
                );

                // PublishFile
                $filecount++;
            } catch (FileGenerationWasAborted|FileGenerationFailedException|InvalidArgumentException $e) {
                $this->error($e->getMessage());
            }
        }

        $this->console->info("Success - {$filecount} files written");
        return Exitcode::SUCCESS;
    }

    private function stringify(mixed $value, int $depth = 0): string
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
