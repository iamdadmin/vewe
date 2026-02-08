<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class FooterBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => '',
                'top' => 'py-8 lg:py-12',
                'bottom' => 'py-8 lg:py-12',
                'container' => 'py-8 lg:py-4 lg:flex lg:items-center lg:justify-between lg:gap-x-3',
                'left' => 'flex items-center justify-center lg:justify-start lg:flex-1 gap-x-1.5 mt-3 lg:mt-0 lg:order-1',
                'center' => 'mt-3 lg:mt-0 lg:order-2 flex items-center justify-center',
                'right' => 'lg:flex-1 flex items-center justify-center lg:justify-end gap-x-1.5 lg:order-3',
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
