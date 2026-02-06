<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class AlertBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative overflow-hidden w-full rounded-lg p-4 flex gap-2.5',
        'wrapper' => 'min-w-0 flex-1 flex flex-col',
        'title' => 'text-sm font-medium',
        'description' => 'text-sm opacity-90',
        'icon' => 'shrink-0 size-5',
        'avatar' => 'shrink-0',
        'avatarSize' => '2xl',
        'actions' => 'flex flex-wrap gap-1.5 shrink-0',
        'close' => 'p-0',
    ];

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
        'orientation' => [
            'horizontal' => [
                'root' => 'items-center',
                'actions' => 'items-center',
            ],
            'vertical' => [
                'root' => 'items-start',
                'actions' => 'items-start mt-2.5',
            ],
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
            'variant' => 'solid',
            'class' => [
                'root' => 'bg-${color} text-inverted',
            ],
        ],
        [
            'color' => 'color',
            'variant' => 'outline',
            'class' => [
                'root' => 'text-${color} ring ring-inset ring-${color}/25',
            ],
        ],
        [
            'color' => 'color',
            'variant' => 'soft',
            'class' => [
                'root' => 'bg-${color}/10 text-${color}',
            ],
        ],
        [
            'color' => 'color',
            'variant' => 'subtle',
            'class' => [
                'root' => 'bg-${color}/10 text-${color} ring ring-inset ring-${color}/25',
            ],
        ],
        [
            'color' => 'neutral',
            'variant' => 'solid',
            'class' => [
                'root' => 'text-inverted bg-inverted',
            ],
        ],
        [
            'color' => 'neutral',
            'variant' => 'outline',
            'class' => [
                'root' => 'text-highlighted bg-default ring ring-inset ring-default',
            ],
        ],
        [
            'color' => 'neutral',
            'variant' => 'soft',
            'class' => [
                'root' => 'text-highlighted bg-elevated/50',
            ],
        ],
        [
            'color' => 'neutral',
            'variant' => 'subtle',
            'class' => [
                'root' => 'text-highlighted bg-elevated/50 ring ring-inset ring-accented',
            ],
        ],
    ];

    protected const array DEFAULT_VARIANTS = [
        'color' => 'primary',
        'variant' => 'solid',
    ];
}
