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

final class CollectCommand
{
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
        ld('This command is disabled');
        $this->collectPath = $collect;

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->collectPath, RecursiveDirectoryIterator::SKIP_DOTS),
        );

        $filecount = 0;

        $filesToSkip = ['editor-drag-handle.ts', 'editor-mention-menu.ts', 'editor-toolbar.ts', 'editor-emoji-menu.ts', 'editor-suggestion-menu.ts', 'editor.ts', 'index.ts'];

        foreach ($iterator as $file) {
            if (in_array($file->getBasename(), $filesToSkip)) {
                // Skip this file
                continue;
            }

            // Get the file
            $inputFile = file_get_contents($file->getPathName());

            // Replace a few common things
            $inputFile = preg_replace("/^import\s+.*\n/m", '', $inputFile);
            $inputFile = str_replace('export default', '', $inputFile);
            $inputFile = str_replace(' (options: Required<ModuleOptions>) => {', '', $inputFile);
            $inputFile = str_replace('  return defuFn(', '', $inputFile);
            $inputFile = str_replace('  return defu(', '', $inputFile);
            $inputFile = str_replace('() => undefined', "''", $inputFile);
            $inputFile = str_replace('() => ', '', $inputFile);
            $inputFile = str_replace('(prev: string) => [prev, ', "['mergeWithParent', ", $inputFile);
            $inputFile = str_replace("\n  }, input(options))", ",\n  mergeWith: 'input',", $inputFile);
            $inputFile = str_replace("\n  }, select(options))", ",\n  mergeWith: 'select',", $inputFile);
            $inputFile = str_replace('const input = inputTheme(options)', '', $inputFile);
            $inputFile = str_replace('return {', '{', $inputFile);
            $inputFile = str_replace('...input.variants.variant', "mergeWith: 'input.variants.variant'", $inputFile);
            $inputFile = str_replace('(options: Required<ModuleOptions>) => (', '', $inputFile);
            $inputFile = str_replace("(options: Required<NuxtOptions['ui']>) => (", '', $inputFile);
            $inputFile = str_replace('...(options.theme.colors || []).map((color: string) => (', "\n  ", $inputFile);
            $inputFile = str_replace('...Object.fromEntries((options.theme.colors || []).map((color: string) => [color, ', 'color: ', $inputFile);
            $inputFile = str_replace(')), ...(options.theme.colors || []).map((color: string) => (', "\n  ", $inputFile);
            $inputFile = str_replace(')), ...(options.theme.colors || []).map((highlightColor: string) => (', "\n  ", $inputFile);
            $inputFile = str_replace(')), ...(options.theme.colors || []).map((spotlightColor: string) => (', "\n  ", $inputFile);
            $inputFile = str_replace(')), ...(options.theme.colors || []).map((loadingColor: string) => (', "\n  ", $inputFile);
            $inputFile = str_replace("      ...Object.fromEntries((options.theme.colors || []).map((color: string) => [color, ''])),\n", '', $inputFile);
            $inputFile = str_replace("options.theme.transitions && '", "'(options.theme.transitions) && ", $inputFile);
            $inputFile = str_replace("options.theme?.transitions && '", "'(options.theme.transitions) && ", $inputFile);
            $inputFile = str_replace('...fieldGroupVariant,', "fieldGroupVariant: {\n   import: '(fieldGroupVariant)'\n  },\n  ", $inputFile);
            $inputFile = str_replace('...fieldGroupVariantWithRoot,', "fieldGroupVariantWithRoot: {\n   import: '(fieldGroupVariantWithRoot)'\n  },\n  ", $inputFile);
            $inputFile = str_replace('(content: string) => [content, ', "['contentFromParent',", $inputFile);
            $inputFile = str_replace("(prev: Record<string, any>[]) => prev.map(item => ({\n      ...item,", " {\n", $inputFile);
            $inputFile = str_replace("class: typeof item.class === 'string' ? replaceFocus(item.class) : item.class", '', $inputFile);
            $inputFile = str_replace("function replaceFocus(str: string): string {\n  return str", '', $inputFile);
            $inputFile = str_replace(".replace(/focus-visible:/g, 'focus:')", "replace: 'focus-visible:',\n replaceWith: 'focus:'", $inputFile);
            $inputFile = str_replace(".replace(/focus:/g, 'focus-visible:')", "replace: 'focus:',\n replaceWith: 'focus-visible'", $inputFile);

            $inputFile = str_replace("\n    highlightColor,\n", "\n    highlightColor: 'highlightColor',\n", $inputFile);
            $inputFile = str_replace("\n    spotlightColor,\n", "\n    spotlightColor: 'spotlightColor',\n", $inputFile);
            $inputFile = str_replace("\n    loadingColor,\n", "\n    loadingColor: 'loadingColor',\n", $inputFile);
            $inputFile = str_replace("\n    color,\n", "\n    color: 'color',\n", $inputFile);
            $inputFile = str_replace("\n      color,\n", "\n    color: 'color',\n", $inputFile);
            $inputFile = str_replace("\n  })), \n  {\n", "\n  },\n  {\n", $inputFile);

            // Wrap array keys in double quotes (only keys, not content inside strings)
            $inputFile = preg_replace("/^(\s*)([a-zA-Z_][a-zA-Z0-9_]*)\s*:/m", '$1"$2":', $inputFile);

            // Replace single quotes with double
            $inputFile = str_replace("'", "\"", $inputFile);

            // Except for bits in square brackets which we'll put back
            $inputFile = str_replace('["*"]', "['*']", $inputFile);
            $inputFile = str_replace('["·"]', "['·']", $inputFile);
            $inputFile = str_replace('[""]', "['']", $inputFile);
            $inputFile = str_replace('state="active"', "state='active'", $inputFile);

            // Replace backticks with double
            $inputFile = str_replace('`', "\"", $inputFile);

            $inputFile = str_replace(']))', '', $inputFile);
            $inputFile = str_replace('}))', '}', $inputFile);
            $inputFile = str_replace('})', '}', $inputFile);

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
}
