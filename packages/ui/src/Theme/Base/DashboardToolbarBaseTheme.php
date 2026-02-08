<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class DashboardToolbarBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'shrink-0 flex items-center justify-between border-b border-default px-4 sm:px-6 gap-1.5 overflow-x-auto min-h-[49px]',
                'left' => 'flex items-center gap-1.5',
                'right' => 'flex items-center gap-1.5',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            ['PHvariants'],
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
