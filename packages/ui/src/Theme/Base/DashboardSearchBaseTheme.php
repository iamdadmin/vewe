<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class DashboardSearchBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'modal' => '',
                'input' => '',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'fullscreen' => [
                    'false' => [
                        'modal' => 'sm:max-w-3xl h-full sm:h-[28rem]',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'input' => '[&>input]:text-sm',
                    ],
                    'sm' => [
                        'input' => '[&>input]:text-sm',
                    ],
                    'md' => [
                        'input' => '[&>input]:text-base/5',
                    ],
                    'lg' => [
                        'input' => '[&>input]:text-base/5',
                    ],
                    'xl' => [
                        'input' => '[&>input]:text-lg',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'size' => 'md',
            ],
        );
    }
}
