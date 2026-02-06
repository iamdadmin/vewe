<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class DashboardNavbarBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'h-(--ui-header-height) shrink-0 flex items-center justify-between border-b border-default px-4 sm:px-6 gap-1.5',
        'left' => 'flex items-center gap-1.5 min-w-0',
        'icon' => 'shrink-0 size-5 self-center me-1.5',
        'title' => 'flex items-center gap-1.5 font-semibold text-highlighted truncate',
        'center' => 'hidden lg:flex',
        'right' => 'flex items-center shrink-0 gap-1.5',
        'toggle' => '',
    ];

    protected const array VARIANTS = [
        'toggleSide' => [
            'left' => [
                'toggle' => '',
            ],
            'right' => [
                'toggle' => '',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
