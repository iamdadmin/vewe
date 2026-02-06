<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class FooterBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => '',
        'top' => 'py-8 lg:py-12',
        'bottom' => 'py-8 lg:py-12',
        'container' => 'py-8 lg:py-4 lg:flex lg:items-center lg:justify-between lg:gap-x-3',
        'left' => 'flex items-center justify-center lg:justify-start lg:flex-1 gap-x-1.5 mt-3 lg:mt-0 lg:order-1',
        'center' => 'mt-3 lg:mt-0 lg:order-2 flex items-center justify-center',
        'right' => 'lg:flex-1 flex items-center justify-center lg:justify-end gap-x-1.5 lg:order-3',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
