<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class FormFieldBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => '',
                'wrapper' => '',
                'labelWrapper' => 'flex content-center items-center justify-between gap-1',
                'label' => 'block font-medium text-default',
                'container' => 'relative',
                'description' => 'text-muted',
                'error' => 'mt-2 text-error',
                'hint' => 'text-muted',
                'help' => 'mt-2 text-muted',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'size' => [
                    'xs' => [
                        'root' => 'text-xs',
                    ],
                    'sm' => [
                        'root' => 'text-xs',
                    ],
                    'md' => [
                        'root' => 'text-sm',
                    ],
                    'lg' => [
                        'root' => 'text-sm',
                    ],
                    'xl' => [
                        'root' => 'text-base',
                    ],
                ],
                'required' => [
                    'true' => [
                        'label' => 'after:content-[\'*\'] after:ms-0.5 after:text-error',
                    ],
                ],
                'orientation' => [
                    'vertical' => [
                        'container' => 'mt-1',
                    ],
                    'horizontal' => [
                        'root' => 'flex justify-between place-items-baseline gap-2',
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
                'orientation' => 'vertical',
            ],
        );
    }
}
