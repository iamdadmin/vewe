<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class DashboardSidebarBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative hidden lg:flex flex-col min-h-svh min-w-16 w-(--width) shrink-0',
                'header' => 'h-(--ui-header-height) shrink-0 flex items-center gap-1.5 px-4',
                'body' => 'flex flex-col gap-4 flex-1 overflow-y-auto px-4 py-2',
                'footer' => 'shrink-0 flex items-center gap-1.5 px-4 py-2',
                'toggle' => '',
                'handle' => '',
                'content' => 'lg:hidden',
                'overlay' => 'lg:hidden',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
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
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            ['PHcompoundVariants'],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            ['PHdefaultVariants'],
        );
    }
}
