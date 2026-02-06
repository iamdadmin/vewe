<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CodeCollapseBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative [&_pre]:h-[200px]',
        'footer' => 'h-16 absolute inset-x-px bottom-px rounded-b-md flex items-center justify-center',
        'trigger' => 'group',
        'triggerIcon' => 'group-data-[state=open]:rotate-180',
    ];

    protected const array VARIANTS = [
        'open' => [
            'true' => [
                'root' => '[&_pre]:h-auto [&_pre]:min-h-[200px] [&_pre]:max-h-[80vh] [&_pre]:pb-12',
            ],
            'false' => [
                'root' => '[&_pre]:overflow-hidden',
                'footer' => 'bg-gradient-to-t from-muted',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
