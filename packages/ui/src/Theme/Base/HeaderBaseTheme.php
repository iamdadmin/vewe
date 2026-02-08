<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class HeaderBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'bg-default/75 backdrop-blur border-b border-default h-(--ui-header-height) sticky top-0 z-50',
                'container' => 'flex items-center justify-between gap-3 h-full',
                'left' => 'lg:flex-1 flex items-center gap-1.5',
                'center' => 'hidden lg:flex',
                'right' => 'flex items-center justify-end lg:flex-1 gap-1.5',
                'title' => 'shrink-0 font-bold text-xl text-highlighted flex items-end gap-1.5',
                'toggle' => 'lg:hidden',
                'content' => 'lg:hidden',
                'overlay' => 'lg:hidden',
                'header' => 'px-4 sm:px-6 h-(--ui-header-height) shrink-0 flex items-center justify-between gap-3',
                'body' => 'p-4 sm:p-6 overflow-y-auto',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'toggleSide' => [
                    'left' => [
                        'toggle' => '-ms-1.5',
                    ],
                    'right' => [
                        'toggle' => '-me-1.5',
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
