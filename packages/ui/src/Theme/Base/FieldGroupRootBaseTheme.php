<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class FieldGroupRootBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'base' => 'relative',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'fieldGroup' => [
                    'horizontal' => [
                        'root' => 'group has-focus-visible:z-[1]',
                        'base' => 'group-not-only:group-first:rounded-e-none group-not-only:group-last:rounded-s-none group-not-last:group-not-first:rounded-none',
                    ],
                    'vertical' => [
                        'root' => 'group has-focus-visible:z-[1]',
                        'base' => 'group-not-only:group-first:rounded-b-none group-not-only:group-last:rounded-t-none group-not-last:group-not-first:rounded-none',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'base' => '',
                    ],
                    'sm' => [
                        'base' => '',
                    ],
                    'md' => [
                        'base' => '',
                    ],
                    'lg' => [
                        'base' => '',
                    ],
                    'xl' => [
                        'base' => '',
                    ],
                ],
                'orientation' => [
                    'horizontal' => [
                        'base' => 'inline-flex -space-x-px',
                    ],
                    'vertical' => [
                        'base' => 'flex flex-col -space-y-px',
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
            [],
        );
    }
}
