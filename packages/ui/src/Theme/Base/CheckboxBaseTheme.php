<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CheckboxBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative flex items-start',
                'container' => 'flex items-center',
                'base' => 'rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2',
                'indicator' => 'flex items-center justify-center size-full text-inverted',
                'icon' => 'shrink-0 size-full',
                'wrapper' => 'w-full',
                'label' => 'block font-medium text-default',
                'description' => 'text-muted',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    'phcolorph' => [
                        'base' => 'focus-visible:outline-phcolorph',
                        'indicator' => 'bg-phcolorph',
                    ],
                    'neutral' => [
                        'base' => 'focus-visible:outline-inverted',
                        'indicator' => 'bg-inverted',
                    ],
                ],
                'variant' => [
                    'list' => [
                        'root' => '',
                    ],
                    'card' => [
                        'root' => 'border border-muted rounded-lg',
                    ],
                ],
                'indicator' => [
                    'start' => [
                        'root' => 'flex-row',
                        'wrapper' => 'ms-2',
                    ],
                    'end' => [
                        'root' => 'flex-row-reverse',
                        'wrapper' => 'me-2',
                    ],
                    'hidden' => [
                        'base' => 'sr-only',
                        'wrapper' => 'text-center',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'base' => 'size-3',
                        'container' => 'h-4',
                        'wrapper' => 'text-xs',
                    ],
                    'sm' => [
                        'base' => 'size-3.5',
                        'container' => 'h-4',
                        'wrapper' => 'text-xs',
                    ],
                    'md' => [
                        'base' => 'size-4',
                        'container' => 'h-5',
                        'wrapper' => 'text-sm',
                    ],
                    'lg' => [
                        'base' => 'size-4.5',
                        'container' => 'h-5',
                        'wrapper' => 'text-sm',
                    ],
                    'xl' => [
                        'base' => 'size-5',
                        'container' => 'h-6',
                        'wrapper' => 'text-base',
                    ],
                ],
                'required' => [
                    'true' => [
                        'label' => 'after:content-[\"*\"] after:ms-0.5 after:text-error',
                    ],
                ],
                'disabled' => [
                    'true' => [
                        'root' => 'opacity-75',
                        'base' => 'cursor-not-allowed',
                        'label' => 'cursor-not-allowed',
                        'description' => 'cursor-not-allowed',
                    ],
                ],
                'checked' => [
                    'true' => '',
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'size' => 'xs',
                    'variant' => 'card',
                    'class' => [
                        'root' => 'p-2.5',
                    ],
                ],
                [
                    'size' => 'sm',
                    'variant' => 'card',
                    'class' => [
                        'root' => 'p-3',
                    ],
                ],
                [
                    'size' => 'md',
                    'variant' => 'card',
                    'class' => [
                        'root' => 'p-3.5',
                    ],
                ],
                [
                    'size' => 'lg',
                    'variant' => 'card',
                    'class' => [
                        'root' => 'p-4',
                    ],
                ],
                [
                    'size' => 'xl',
                    'variant' => 'card',
                    'class' => [
                        'root' => 'p-4.5',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'card',
                    'class' => [
                        'root' => 'has-data-[state=checked]:border-phcolorph',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'card',
                    'class' => [
                        'root' => 'has-data-[state=checked]:border-inverted',
                    ],
                ],
                [
                    'variant' => 'card',
                    'disabled' => true,
                    'class' => [
                        'root' => 'cursor-not-allowed',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'size' => 'md',
                'color' => 'phcolorph',
                'variant' => 'list',
                'indicator' => 'start',
            ],
        );
    }
}
