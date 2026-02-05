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

final class FixupCommand
{
    private string $depositPath = '';

    public function __construct(
        private readonly Console $console,
        private readonly ConsoleArgumentBag $consoleArgumentBag,
    ) {
        $this->depositPath = root_path('src/JsonTheme/');
    }

    #[ConsoleCommand(
        name: 'vewe:fixup',
        description: 'Convert Nuxt-UI theme into Vewe CVA classes',
    )]
    public function __invoke(): ExitCode
    {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->depositPath, RecursiveDirectoryIterator::SKIP_DOTS),
        );

        $filecount = 0;

        foreach ($iterator as $file) {
            // Get the file
            $inputFile = file_get_contents($file->getPathName());

            // Json decode
            $json = json_decode($inputFile, true);

            if (! isset($json['compoundVariants'])) {
                continue;
            }

            $compoundVariants = array_map(function ($cvVal) {
                if (is_string($cvVal['class'])) {
                    $cvVal['class'] = ['base' => $cvVal['class']];
                }
                return $cvVal;
            }, $json['compoundVariants']);

            $json['compoundVariants'] = $compoundVariants;

            // Save the output
            $outputFile = str_replace('.ts', '.v2.ts');
            file_put_contents($outputFile, $inputFile);
            $filecount++;
        }

        $this->console->info("Success - {$filecount} files written");
        return Exitcode::SUCCESS;
    }
}
