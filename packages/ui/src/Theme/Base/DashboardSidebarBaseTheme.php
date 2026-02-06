<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class DashboardSidebarBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative hidden lg:flex flex-col min-h-svh min-w-16 w-(--width) shrink-0',
        'header' => 'h-(--ui-header-height) shrink-0 flex items-center gap-1.5 px-4',
        'body' => 'flex flex-col gap-4 flex-1 overflow-y-auto px-4 py-2',
        'footer' => 'shrink-0 flex items-center gap-1.5 px-4 py-2',
        'toggle' => '',
        'handle' => '',
        'content' => 'lg:hidden',
        'overlay' => 'lg:hidden',
    ];

    protected const array VARIANTS = [
        'menu' => [
            'true' => [
                'header' => 'sm:px-6',
                'body' => 'sm:px-6',
                'footer' => 'sm:px-6',
            ],
        ],
        'side' => [
            'left' => [
                'root' => 'border-e border-default',
            ],
            'right' => [
                'root' => '',
            ],
        ],
        'toggleSide' => [
            'left' => [
                'toggle' => '',
            ],
            'right' => [
                'toggle' => 'ms-auto',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
