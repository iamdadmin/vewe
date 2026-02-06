<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PageBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'flex flex-col lg:grid lg:grid-cols-10 lg:gap-10',
        'left' => 'lg:col-span-2',
        'center' => 'lg:col-span-8',
        'right' => 'lg:col-span-2 order-first lg:order-last',
    ];

    protected const array VARIANTS = [
        'left' => [
            'true' => [
                'base' => '',
            ],
        ],
        'right' => [
            'true' => [
                'base' => '',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [
        [
            'left' => true,
            'right' => true,
            'class' => [
                'center' => 'lg:col-span-6',
            ],
        ],
        [
            'left' => false,
            'right' => false,
            'class' => [
                'center' => 'lg:col-span-10',
            ],
        ],
    ];

    protected const array DEFAULT_VARIANTS = [];
}
