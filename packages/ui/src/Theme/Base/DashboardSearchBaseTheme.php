<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class DashboardSearchBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'modal' => '',
        'input' => '',
    ];

    protected const array VARIANTS = [
        'fullscreen' => [
            'false' => [
                'modal' => 'sm:max-w-3xl h-full sm:h-[28rem]',
            ],
        ],
        'size' => [
            'xs' => [
                'input' => '[&>input]:text-sm',
            ],
            'sm' => [
                'input' => '[&>input]:text-sm',
            ],
            'md' => [
                'input' => '[&>input]:text-base/5',
            ],
            'lg' => [
                'input' => '[&>input]:text-base/5',
            ],
            'xl' => [
                'input' => '[&>input]:text-lg',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [
        'size' => 'md',
    ];
}
