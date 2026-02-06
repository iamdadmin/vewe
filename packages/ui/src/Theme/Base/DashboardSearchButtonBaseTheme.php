<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class DashboardSearchButtonBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => '',
        'label' => '',
        'trailing' => 'hidden lg:flex items-center gap-0.5 ms-auto',
    ];

    protected const array VARIANTS = [
        'collapsed' => [
            'true' => [
                'label' => 'hidden',
                'trailing' => 'lg:hidden',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
