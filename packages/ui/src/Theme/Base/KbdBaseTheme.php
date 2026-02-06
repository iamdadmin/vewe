<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class KbdBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [];

    protected const array VARIANTS = [
        'color' => [
            'color' => '',
            'neutral' => '',
        ],
        'variant' => [
            'solid' => '',
            'outline' => '',
            'soft' => '',
            'subtle' => '',
        ],
        'size' => [
            'sm' => 'h-4 min-w-[16px] text-[10px]',
            'md' => 'h-5 min-w-[20px] text-[11px]',
            'lg' => 'h-6 min-w-[24px] text-[12px]',
        ],
    ];

    protected const array COMPOUND_VARIANTS = [
        [
            'color' => 'color',
            'variant' => 'solid',
            'class' => [
                'base' => 'text-inverted bg-${color}',
            ],
        ],
        [
            'color' => 'color',
            'variant' => 'outline',
            'class' => [
                'base' => 'ring ring-inset ring-${color}/50 text-${color}',
            ],
        ],
        [
            'color' => 'color',
            'variant' => 'soft',
            'class' => [
                'base' => 'text-${color} bg-${color}/10',
            ],
        ],
        [
            'color' => 'color',
            'variant' => 'subtle',
            'class' => [
                'base' => 'text-${color} ring ring-inset ring-${color}/25 bg-${color}/10',
            ],
        ],
        [
            'color' => 'neutral',
            'variant' => 'solid',
            'class' => [
                'base' => 'text-inverted bg-inverted',
            ],
        ],
        [
            'color' => 'neutral',
            'variant' => 'outline',
            'class' => [
                'base' => 'ring ring-inset ring-accented text-default bg-default',
            ],
        ],
        [
            'color' => 'neutral',
            'variant' => 'soft',
            'class' => [
                'base' => 'text-default bg-elevated',
            ],
        ],
        [
            'color' => 'neutral',
            'variant' => 'subtle',
            'class' => [
                'base' => 'ring ring-inset ring-accented text-default bg-elevated',
            ],
        ],
    ];

    protected const array DEFAULT_VARIANTS = [
        'variant' => 'outline',
        'color' => 'neutral',
        'size' => 'md',
    ];
}
