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

final class GenerateSafelistCommand
{
    private string $depositPath = '';

    public function __construct(
        private readonly Console $console,
        private readonly ConsoleArgumentBag $consoleArgumentBag,
    ) {
        $this->depositPath = root_path('packages/ui/src/Theme/Base/');
    }

    #[ConsoleCommand(
        name: 'vewe:generate:safelist',
        description: 'Convert Nuxt-UI theme into Vewe CVA classes',
        aliases: ['vewe:gen:sl'],
    )]
    public function __invoke(): ExitCode
    {
        $opacities = [5, 10, 20, 25, 30, 40, 50, 60, 70, 75, 80, 85, 90, 95];
        $variants = ['', 'hover:', 'active:', 'focus:', 'focus-visible:'];
        $colors = ['primary', 'secondary', 'neutral', 'success', 'info', 'warning', 'error'];
        $utilities = ['text', 'bg', 'border', 'ring'];

        $stubFile = '';

        foreach ($colors as $color) {
            foreach ($variants as $variant) {
                foreach ($opacities as $opacity) {
                    $stubFile .= "<div class=\"";
                    foreach ($utilities as $utility) {
                        $stubFile .= "{$variant}{$utility}-{$color}/{$opacity} ";
                    }
                    $stubFile = rtrim($stubFile) . "\">&nbsp;</div>\n";
                }
            }
        }

        file_put_contents($this->depositPath . '/_safelist.html', $stubFile);

        $this->console->info('Success - safelist.html file written');

        return Exitcode::SUCCESS;
    }
}
