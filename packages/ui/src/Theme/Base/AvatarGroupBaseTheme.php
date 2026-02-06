<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class AvatarGroupBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'inline-flex flex-row-reverse justify-end',
        'base' => 'relative rounded-full ring-bg first:me-0',
    ];

    protected const array VARIANTS = [
        'size' => [
            '3xs' => [
                'base' => 'ring -me-0.5',
            ],
            '2xs' => [
                'base' => 'ring -me-0.5',
            ],
            'xs' => [
                'base' => 'ring -me-0.5',
            ],
            'sm' => [
                'base' => 'ring-2 -me-1.5',
            ],
            'md' => [
                'base' => 'ring-2 -me-1.5',
            ],
            'lg' => [
                'base' => 'ring-2 -me-1.5',
            ],
            'xl' => [
                'base' => 'ring-3 -me-2',
            ],
            '2xl' => [
                'base' => 'ring-3 -me-2',
            ],
            '3xl' => [
                'base' => 'ring-3 -me-2',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [
        'size' => 'md',
    ];
}
