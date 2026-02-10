<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class AvatarGroupBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'inline-flex flex-row-reverse justify-end',
                'base' => 'relative rounded-full ring-bg first:me-0',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'size' => [
                    '3xs' => [
                        'base' => 'ring -me-0.5',
                    ],
                    '2xs' => [
                        'base' => 'ring -me-0.5',
                    ],
                    'xs' => [
                        'base' => 'ring -me-0.5',
                    ],
                    'sm' => [
                        'base' => 'ring-2 -me-1.5',
                    ],
                    'md' => [
                        'base' => 'ring-2 -me-1.5',
                    ],
                    'lg' => [
                        'base' => 'ring-2 -me-1.5',
                    ],
                    'xl' => [
                        'base' => 'ring-3 -me-2',
                    ],
                    '2xl' => [
                        'base' => 'ring-3 -me-2',
                    ],
                    '3xl' => [
                        'base' => 'ring-3 -me-2',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'size' => 'md',
            ],
        );
    }
}
