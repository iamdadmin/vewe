<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class DashboardToolbarBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'shrink-0 flex items-center justify-between border-b border-default px-4 sm:px-6 gap-1.5 overflow-x-auto min-h-[49px]',
        'left' => 'flex items-center gap-1.5',
        'right' => 'flex items-center gap-1.5',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
