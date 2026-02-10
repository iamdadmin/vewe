<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;
use Vewe\Ui\Theme\Base\InputBaseTheme;

final class InputNumberBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => (new InputBaseTheme())->slots->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [
                'root' => 'relative inline-flex items-center',
                'base' => [
                    'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors',
                ],
                'increment' => 'absolute flex items-center',
                'decrement' => 'absolute flex items-center',
            ],
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => (new InputBaseTheme())->variants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [
                'fieldGroup' => (new FieldGroupRootBaseTheme())->variants['fieldGroup'],
                'color' => [
                    $this->color => [
                        'base' => '',
                    ],
                    'neutral' => [
                        'base' => '',
                    ],
                ],
                'size' => [
                    'xs' => 'px-2 py-1 text-xs gap-1',
                    'sm' => 'px-2.5 py-1.5 text-xs gap-1.5',
                    'md' => 'px-2.5 py-1.5 text-sm gap-1.5',
                    'lg' => 'px-3 py-2 text-sm gap-2',
                    'xl' => 'px-3 py-2 text-base gap-2',
                ],
                'variant' => [
                    'mergeWith' => 'input.variants.variant',
                ],
                'disabled' => [
                    'true' => [
                        'increment' => 'opacity-75 cursor-not-allowed',
                        'decrement' => 'opacity-75 cursor-not-allowed',
                    ],
                ],
                'orientation' => [
                    'horizontal' => [
                        'base' => 'text-center',
                        'increment' => 'inset-y-0 end-0 pe-1',
                        'decrement' => 'inset-y-0 start-0 ps-1',
                    ],
                    'vertical' => [
                        'increment' => 'top-0 end-0 pe-1 [&>button]:py-0 scale-80',
                        'decrement' => 'bottom-0 end-0 pe-1 [&>button]:py-0 scale-80',
                    ],
                ],
                'highlight' => [
                    'true' => '',
                ],
                'increment' => [
                    'false' => '',
                ],
                'decrement' => [
                    'false' => '',
                ],
            ],
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => (new InputBaseTheme())->compoundVariants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [
                [
                    'color' => $this->color,
                    'variant' => [
                        'outline',
                        'subtle',
                    ],
                    'class' => [
                        'base' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-'.$this->color,
                    ],
                ],
                [
                    'color' => $this->color,
                    'highlight' => true,
                    'class' => [
                        'base' => 'ring ring-inset ring-'.$this->color,
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => [
                        'outline',
                        'subtle',
                    ],
                    'class' => [
                        'base' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'highlight' => true,
                    'class' => [
                        'base' => 'ring ring-inset ring-inverted',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'decrement' => false,
                    'class' => [
                        'base' => 'text-start',
                    ],
                ],
                [
                    'decrement' => true,
                    'size' => 'xs',
                    'class' => [
                        'base' => 'ps-7',
                    ],
                ],
                [
                    'decrement' => true,
                    'size' => 'sm',
                    'class' => [
                        'base' => 'ps-8',
                    ],
                ],
                [
                    'decrement' => true,
                    'size' => 'md',
                    'class' => [
                        'base' => 'ps-9',
                    ],
                ],
                [
                    'decrement' => true,
                    'size' => 'lg',
                    'class' => [
                        'base' => 'ps-10',
                    ],
                ],
                [
                    'decrement' => true,
                    'size' => 'xl',
                    'class' => [
                        'base' => 'ps-11',
                    ],
                ],
                [
                    'increment' => true,
                    'size' => 'xs',
                    'class' => [
                        'base' => 'pe-7',
                    ],
                ],
                [
                    'increment' => true,
                    'size' => 'sm',
                    'class' => [
                        'base' => 'pe-8',
                    ],
                ],
                [
                    'increment' => true,
                    'size' => 'md',
                    'class' => [
                        'base' => 'pe-9',
                    ],
                ],
                [
                    'increment' => true,
                    'size' => 'lg',
                    'class' => [
                        'base' => 'pe-10',
                    ],
                ],
                [
                    'increment' => true,
                    'size' => 'xl',
                    'class' => [
                        'base' => 'pe-11',
                    ],
                ],
            ],
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => (new InputBaseTheme())->defaultVariants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [
                'size' => 'md',
                'color' => $this->color,
                'variant' => 'outline',
            ],
            ),
        );
    }
}
