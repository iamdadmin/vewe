<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class FieldGroupBaseTheme implements Theme
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
                        'base' => 'not-only:first:rounded-e-none not-only:last:rounded-s-none not-last:not-first:rounded-none focus-visible:z-[1]',
                    ],
                    'vertical' => [
                        'base' => 'not-only:first:rounded-b-none not-only:last:rounded-t-none not-last:not-first:rounded-none focus-visible:z-[1]',
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
