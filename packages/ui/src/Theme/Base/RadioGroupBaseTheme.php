<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class RadioGroupBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative',
                'fieldset' => 'flex gap-x-2',
                'legend' => 'mb-1 block font-medium text-default',
                'item' => 'flex items-start',
                'container' => 'flex items-center',
                'base' => 'rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2',
                'indicator' => 'flex items-center justify-center size-full after:bg-default after:rounded-full',
                'wrapper' => 'w-full',
                'label' => 'block font-medium text-default',
                'description' => 'text-muted',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    $this->color => [
                        'base' => 'focus-visible:outline-'.$this->color,
                        'indicator' => 'bg-'.$this->color,
                    ],
                    'neutral' => [
                        'base' => 'focus-visible:outline-inverted',
                        'indicator' => 'bg-inverted',
                    ],
                ],
                'variant' => [
                    'list' => [
                        'item' => '',
                    ],
                    'card' => [
                        'item' => 'border border-muted rounded-lg',
                    ],
                    'table' => [
                        'item' => 'border border-muted',
                    ],
                ],
                'orientation' => [
                    'horizontal' => [
                        'fieldset' => 'flex-row',
                    ],
                    'vertical' => [
                        'fieldset' => 'flex-col',
                    ],
                ],
                'indicator' => [
                    'start' => [
                        'item' => 'flex-row',
                        'wrapper' => 'ms-2',
                    ],
                    'end' => [
                        'item' => 'flex-row-reverse',
                        'wrapper' => 'me-2',
                    ],
                    'hidden' => [
                        'base' => 'sr-only',
                        'wrapper' => 'text-center',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'fieldset' => 'gap-y-0.5',
                        'legend' => 'text-xs',
                        'base' => 'size-3',
                        'item' => 'text-xs',
                        'container' => 'h-4',
                        'indicator' => 'after:size-1',
                    ],
                    'sm' => [
                        'fieldset' => 'gap-y-0.5',
                        'legend' => 'text-xs',
                        'base' => 'size-3.5',
                        'item' => 'text-xs',
                        'container' => 'h-4',
                        'indicator' => 'after:size-1',
                    ],
                    'md' => [
                        'fieldset' => 'gap-y-1',
                        'legend' => 'text-sm',
                        'base' => 'size-4',
                        'item' => 'text-sm',
                        'container' => 'h-5',
                        'indicator' => 'after:size-1.5',
                    ],
                    'lg' => [
                        'fieldset' => 'gap-y-1',
                        'legend' => 'text-sm',
                        'base' => 'size-4.5',
                        'item' => 'text-sm',
                        'container' => 'h-5',
                        'indicator' => 'after:size-1.5',
                    ],
                    'xl' => [
                        'fieldset' => 'gap-y-1.5',
                        'legend' => 'text-base',
                        'base' => 'size-5',
                        'item' => 'text-base',
                        'container' => 'h-6',
                        'indicator' => 'after:size-2',
                    ],
                ],
                'disabled' => [
                    'true' => [
                        'item' => 'opacity-75',
                        'base' => 'cursor-not-allowed',
                        'label' => 'cursor-not-allowed',
                        'description' => 'cursor-not-allowed',
                    ],
                ],
                'required' => [
                    'true' => [
                        'legend' => 'after:content-[\"*\"] after:ms-0.5 after:text-error',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'size' => 'xs',
                    'variant' => [
                        'card',
                        'table',
                    ],
                    'class' => [
                        'item' => 'p-2.5',
                    ],
                ],
                [
                    'size' => 'sm',
                    'variant' => [
                        'card',
                        'table',
                    ],
                    'class' => [
                        'item' => 'p-3',
                    ],
                ],
                [
                    'size' => 'md',
                    'variant' => [
                        'card',
                        'table',
                    ],
                    'class' => [
                        'item' => 'p-3.5',
                    ],
                ],
                [
                    'size' => 'lg',
                    'variant' => [
                        'card',
                        'table',
                    ],
                    'class' => [
                        'item' => 'p-4',
                    ],
                ],
                [
                    'size' => 'xl',
                    'variant' => [
                        'card',
                        'table',
                    ],
                    'class' => [
                        'item' => 'p-4.5',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'variant' => 'table',
                    'class' => [
                        'item' => 'first-of-type:rounded-s-lg last-of-type:rounded-e-lg',
                        'fieldset' => 'gap-0 -space-x-px',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'variant' => 'table',
                    'class' => [
                        'item' => 'first-of-type:rounded-t-lg last-of-type:rounded-b-lg',
                        'fieldset' => 'gap-0 -space-y-px',
                    ],
                ],
                [
                    'color' => $this->color,
                    'variant' => 'card',
                    'class' => [
                        'item' => 'has-data-[state=checked]:border-'.$this->color,
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'card',
                    'class' => [
                        'item' => 'has-data-[state=checked]:border-inverted',
                    ],
                ],
                [
                    'color' => $this->color,
                    'variant' => 'table',
                    'class' => [
                        'item' => 'has-data-[state=checked]:bg-'.$this->color.'/10 has-data-[state=checked]:border-'.$this->color.'/50 has-data-[state=checked]:z-[1]',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'table',
                    'class' => [
                        'item' => 'has-data-[state=checked]:bg-elevated has-data-[state=checked]:border-inverted/50 has-data-[state=checked]:z-[1]',
                    ],
                ],
                [
                    'variant' => [
                        'card',
                        'table',
                    ],
                    'disabled' => true,
                    'class' => [
                        'item' => 'cursor-not-allowed',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'size' => 'md',
                'color' => $this->color,
                'variant' => 'list',
                'orientation' => 'vertical',
                'indicator' => 'start',
            ],
        );
    }
}
