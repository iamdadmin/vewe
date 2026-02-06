<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PricingPlansBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [];

    protected const array VARIANTS = [
        'orientation' => [
            'horizontal' => 'lg:grid lg:grid-cols-[repeat(var(--count),minmax(0,1fr))]',
            'vertical' => '',
        ],
        'compact' => [
            'false' => 'gap-x-8',
        ],
        'scale' => [
            'true' => [
                'base' => '',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [
        [
            'compact' => false,
            'scale' => true,
            'class' => [
                'base' => 'lg:gap-x-13',
            ],
        ],
    ];

    protected const array DEFAULT_VARIANTS = [];
}
