<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CardBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'rounded-lg overflow-hidden',
        'header' => 'p-4 sm:px-6',
        'body' => 'p-4 sm:p-6',
        'footer' => 'p-4 sm:px-6',
    ];

    protected const array VARIANTS = [
        'variant' => [
            'solid' => [
                'root' => 'bg-inverted text-inverted',
            ],
            'outline' => [
                'root' => 'bg-default ring ring-default divide-y divide-default',
            ],
            'soft' => [
                'root' => 'bg-elevated/50 divide-y divide-default',
            ],
            'subtle' => [
                'root' => 'bg-elevated/50 ring ring-default divide-y divide-default',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [
        'variant' => 'outline',
    ];
}
