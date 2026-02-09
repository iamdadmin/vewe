<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CheckboxGroupBaseTheme implements Theme
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
                'item' => '',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'orientation' => [
                    'horizontal' => [
                        'fieldset' => 'flex-row',
                    ],
                    'vertical' => [
                        'fieldset' => 'flex-col',
                    ],
                ],
                'color' => [
                    $this->color => [
                        'item' => '',
                    ],
                    'neutral' => [
                        'item' => '',
                    ],
                ],
                'variant' => [
                    'list' => [
                        'item' => '',
                    ],
                    'card' => [
                        'item' => '',
                    ],
                    'table' => [
                        'item' => 'border border-muted',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'fieldset' => 'gap-y-0.5',
                        'legend' => 'text-xs',
                    ],
                    'sm' => [
                        'fieldset' => 'gap-y-0.5',
                        'legend' => 'text-xs',
                    ],
                    'md' => [
                        'fieldset' => 'gap-y-1',
                        'legend' => 'text-sm',
                    ],
                    'lg' => [
                        'fieldset' => 'gap-y-1',
                        'legend' => 'text-sm',
                    ],
                    'xl' => [
                        'fieldset' => 'gap-y-1.5',
                        'legend' => 'text-base',
                    ],
                ],
                'required' => [
                    'true' => [
                        'legend' => 'after:content-[\"*\"] after:ms-0.5 after:text-error',
                    ],
                ],
                'disabled' => [
                    'true' => [],
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
                    'variant' => 'table',
                    'class' => [
                        'item' => 'p-2.5',
                    ],
                ],
                [
                    'size' => 'sm',
                    'variant' => 'table',
                    'class' => [
                        'item' => 'p-3',
                    ],
                ],
                [
                    'size' => 'md',
                    'variant' => 'table',
                    'class' => [
                        'item' => 'p-3.5',
                    ],
                ],
                [
                    'size' => 'lg',
                    'variant' => 'table',
                    'class' => [
                        'item' => 'p-4',
                    ],
                ],
                [
                    'size' => 'xl',
                    'variant' => 'table',
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
                    'variant' => 'table',
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
                'variant' => 'list',
                'color' => 'primary',
            ],
        );
    }
}
