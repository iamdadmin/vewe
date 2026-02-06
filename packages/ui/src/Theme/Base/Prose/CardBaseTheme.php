<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CardBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => [
            'group relative block my-5 p-4 sm:p-6 border border-default rounded-md bg-default',
            '(options.theme.transitions) && transition-colors',
        ],
        'icon' => 'size-6 mb-2 block',
        'title' => 'text-highlighted font-semibold',
        'description' => 'text-[15px] text-muted *:first:mt-0 *:last:mb-0 *:my-1',
        'externalIcon' => [
            'size-4 align-top absolute right-2 top-2 text-dimmed pointer-events-none',
            '(options.theme.transitions) && transition-colors',
        ],
    ];

    protected const array VARIANTS = [
        'color' => [
            'color' => [
                'icon' => 'text-${color}',
            ],
            'neutral' => [
                'icon' => 'text-highlighted',
            ],
        ],
        'to' => [
            'true' => '',
        ],
        'title' => [
            'true' => [
                'description' => 'mt-1',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [
        [
            'color' => 'color',
            'to' => true,
            'class' => [
                'base' => 'hover:bg-${color}/10 hover:border-${color} has-focus-visible:border-${color}',
                'externalIcon' => 'group-hover:text-${color}',
            ],
        ],
        [
            'color' => 'neutral',
            'to' => true,
            'class' => [
                'base' => 'hover:bg-elevated/50 hover:border-inverted has-focus-visible:border-inverted',
                'externalIcon' => 'group-hover:text-highlighted',
            ],
        ],
    ];

    protected const array DEFAULT_VARIANTS = [
        'color' => 'primary',
    ];
}
