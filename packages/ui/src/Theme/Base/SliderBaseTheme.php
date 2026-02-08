<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class SliderBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative flex items-center select-none touch-none',
                'track' => 'relative bg-accented overflow-hidden rounded-full grow',
                'range' => 'absolute rounded-full',
                'thumb' => 'rounded-full bg-default ring-2 focus-visible:outline-2 focus-visible:outline-offset-2',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    'phcolorph' => [
                        'range' => 'bg-phcolorph',
                        'thumb' => 'ring-phcolorph focus-visible:outline-phcolorph/50',
                    ],
                    'neutral' => [
                        'range' => 'bg-inverted',
                        'thumb' => 'ring-inverted focus-visible:outline-inverted/50',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'thumb' => 'size-3',
                    ],
                    'sm' => [
                        'thumb' => 'size-3.5',
                    ],
                    'md' => [
                        'thumb' => 'size-4',
                    ],
                    'lg' => [
                        'thumb' => 'size-4.5',
                    ],
                    'xl' => [
                        'thumb' => 'size-5',
                    ],
                ],
                'orientation' => [
                    'horizontal' => [
                        'root' => 'w-full',
                        'range' => 'h-full',
                    ],
                    'vertical' => [
                        'root' => 'flex-col h-full',
                        'range' => 'w-full',
                    ],
                ],
                'disabled' => [
                    'true' => [
                        'root' => 'opacity-75 cursor-not-allowed',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'orientation' => 'horizontal',
                    'size' => 'xs',
                    'class' => [
                        'track' => 'h-[6px]',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'sm',
                    'class' => [
                        'track' => 'h-[7px]',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'md',
                    'class' => [
                        'track' => 'h-[8px]',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'lg',
                    'class' => [
                        'track' => 'h-[9px]',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'xl',
                    'class' => [
                        'track' => 'h-[10px]',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'xs',
                    'class' => [
                        'track' => 'w-[6px]',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'sm',
                    'class' => [
                        'track' => 'w-[7px]',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'md',
                    'class' => [
                        'track' => 'w-[8px]',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'lg',
                    'class' => [
                        'track' => 'w-[9px]',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'xl',
                    'class' => [
                        'track' => 'w-[10px]',
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
                'color' => 'primary',
            ],
        );
    }
}
