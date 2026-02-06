<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ToastBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative group overflow-hidden bg-default shadow-lg rounded-lg ring ring-default p-4 flex gap-2.5 focus:outline-none',
        'wrapper' => 'w-0 flex-1 flex flex-col',
        'title' => 'text-sm font-medium text-highlighted',
        'description' => 'text-sm text-muted',
        'icon' => 'shrink-0 size-5',
        'avatar' => 'shrink-0',
        'avatarSize' => '2xl',
        'actions' => 'flex gap-1.5 shrink-0',
        'progress' => 'absolute inset-x-0 bottom-0',
        'close' => 'p-0',
    ];

    protected const array VARIANTS = [
        'color' => [
            '{{color}}' => [
                'root' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-{{color}}',
                'icon' => 'text-{{color}}',
            ],
            'neutral' => [
                'root' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
                'icon' => 'text-highlighted',
            ],
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

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [
        'color' => 'primary',
    ];
}
