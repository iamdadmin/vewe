<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PinInputBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative inline-flex items-center gap-1.5',
        'base' => [
            'rounded-md border-0 placeholder:text-dimmed text-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75',
            '(options.theme.transitions) && transition-colors',
        ],
    ];

    protected const array VARIANTS = [
        'size' => [
            'xs' => [
                'base' => 'size-6 text-xs',
            ],
            'sm' => [
                'base' => 'size-7 text-xs',
            ],
            'md' => [
                'base' => 'size-8 text-sm',
            ],
            'lg' => [
                'base' => 'size-9 text-sm',
            ],
            'xl' => [
                'base' => 'size-10 text-base',
            ],
        ],
        'variant' => [
            'outline' => 'text-highlighted bg-default ring ring-inset ring-accented',
            'soft' => 'text-highlighted bg-elevated/50 hover:bg-elevated focus:bg-elevated disabled:bg-elevated/50',
            'subtle' => 'text-highlighted bg-elevated ring ring-inset ring-accented',
            'ghost' => 'text-highlighted bg-transparent hover:bg-elevated focus:bg-elevated disabled:bg-transparent dark:disabled:bg-transparent',
            'none' => 'text-highlighted bg-transparent',
        ],
        'color' => [
            '{{color}}' => '',
            'neutral' => '',
        ],
        'highlight' => [
            'true' => [
                'base' => '',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [
        [
            'color' => '{{color}}',
            'variant' => [
                'outline',
                'subtle',
            ],
            'class' => [
                'base' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-{{color}}',
            ],
        ],
        [
            'color' => '{{color}}',
            'highlight' => true,
            'class' => [
                'base' => 'ring ring-inset ring-{{color}}',
            ],
        ],
        [
            'color' => 'neutral',
            'variant' => [
                'outline',
                'subtle',
            ],
            'class' => [
                'base' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            ],
        ],
        [
            'color' => 'neutral',
            'highlight' => true,
            'class' => [
                'base' => 'ring ring-inset ring-inverted',
            ],
        ],
    ];

    protected const array DEFAULT_VARIANTS = [
        'size' => 'md',
        'color' => 'primary',
        'variant' => 'outline',
    ];
}
