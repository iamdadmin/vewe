<?php

namespace Vewe\Utility;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Tempest\Console\Console;
use Tempest\Console\ConsoleCommand;
use Tempest\Console\ExitCode;
use Tempest\Console\Input\ConsoleArgumentBag;
use Tempest\Core\PublishesFiles;
use Tempest\Support\Str;

use function Tempest\root_path;

final class CollectCommand
{
    use PublishesFiles;

    private string $collectPath = '';

    private string $depositPath = '';

    public function __construct(
        private readonly Console $console,
        private readonly ConsoleArgumentBag $consoleArgumentBag,
    ) {
        $this->depositPath = root_path('src/JsonTheme/');
    }

    #[ConsoleCommand(
        name: 'vewe:collect',
        description: 'Convert Nuxt-UI theme into Vewe CVA classes',
        aliases: ['vewe:coll', 've:col'],
    )]
    public function __invoke(
        #[ConsoleArgument(description: 'Specifies the path to collect')]
        string $collect,
    ): ExitCode {
        $this->collectPath = $collect;

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->collectPath, RecursiveDirectoryIterator::SKIP_DOTS),
        );

        $filecount = 0;

        foreach ($iterator as $file) {
            // Get the file
            $inputFile = file_get_contents($file->getPathName());

            // Replace a few common things
            $inputFile = preg_replace("/^import\s+.*\n/m", '', $inputFile);
            $inputFile = str_replace('export default', '', $inputFile);
            $inputFile = str_replace("\n (options: Required<ModuleOptions>) => (", '', $inputFile);
            $inputFile = str_replace("\n  (options: Required<NuxtOptions['ui']>) => (", '', $inputFile);
            $inputFile = str_replace('...(options.theme.colors || []).map((color: string) => (', "\n  ", $inputFile);
            $inputFile = str_replace('...Object.fromEntries((options.theme.colors || []).map((color: string) => [color, ', 'color: ', $inputFile);
            $inputFile = str_replace(')), ...(options.theme.colors || []).map((color: string) => (', "\n  ", $inputFile);
            $inputFile = str_replace("      ...Object.fromEntries((options.theme.colors || []).map((color: string) => [color, ''])),\n", '', $inputFile);

            $inputFile = str_replace("\n    color,\n", "\n    color: 'color',\n", $inputFile);
            $inputFile = str_replace("\n  })), \n  {\n", "\n  },\n  {\n", $inputFile);
            $inputFile = str_replace(']))', '', $inputFile);
            $inputFile = str_replace("}))\n", "}\n", $inputFile);
            $inputFile = str_replace("})\n", "}\n", $inputFile);

            // Wrap array keys in double quotes (only keys, not content inside strings)
            $inputFile = preg_replace("/^(\s*)([a-zA-Z_][a-zA-Z0-9_]*)\s*:/m", '$1"$2":', $inputFile);

            // Replace single quotes with double
            $inputFile = str_replace("'", "\"", $inputFile);

            // Replace backticks with double
            $inputFile = str_replace('`', "\"", $inputFile);

            // Save the output
            $outputFile = str_replace($this->collectPath, '', $file->getPathname());
            $outputFile = str_replace('.ts', '.json', $outputFile);
            $outputFile = $this->depositPath . $outputFile;
            file_put_contents($outputFile, $inputFile);
            $filecount++;
        }

        $this->console->info("Success - {$filecount} files written");
        return Exitcode::SUCCESS;
    }

    /* ************************************* */
    /*  Clean up the input file              */
    /* ************************************* */
    private function cleanInput(string $inputFile): string
    {
        //
    }
}
