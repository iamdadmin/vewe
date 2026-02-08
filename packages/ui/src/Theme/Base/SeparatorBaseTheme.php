<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class SeparatorBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'flex items-center align-center text-center',
                'border' => '',
                'container' => 'font-medium text-default flex',
                'icon' => 'shrink-0 size-5',
                'avatar' => 'shrink-0',
                'avatarSize' => '2xs',
                'label' => 'text-sm',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    'phcolorph' => [
                        'border' => 'border-phcolorph',
                    ],
                    'neutral' => [
                        'border' => 'border-default',
                    ],
                ],
                'orientation' => [
                    'horizontal' => [
                        'root' => 'w-full flex-row',
                        'border' => 'w-full',
                        'container' => 'mx-3 whitespace-nowrap',
                    ],
                    'vertical' => [
                        'root' => 'h-full flex-col',
                        'border' => 'h-full',
                        'container' => 'my-2',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'border' => '',
                    ],
                    'sm' => [
                        'border' => '',
                    ],
                    'md' => [
                        'border' => '',
                    ],
                    'lg' => [
                        'border' => '',
                    ],
                    'xl' => [
                        'border' => '',
                    ],
                ],
                'type' => [
                    'solid' => [
                        'border' => 'border-solid',
                    ],
                    'dashed' => [
                        'border' => 'border-dashed',
                    ],
                    'dotted' => [
                        'border' => 'border-dotted',
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
                    'orientation' => 'horizontal',
                    'size' => 'xs',
                    'class' => [
                        'border' => 'border-t',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'sm',
                    'class' => [
                        'border' => 'border-t-[2px]',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'md',
                    'class' => [
                        'border' => 'border-t-[3px]',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'lg',
                    'class' => [
                        'border' => 'border-t-[4px]',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'xl',
                    'class' => [
                        'border' => 'border-t-[5px]',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'xs',
                    'class' => [
                        'border' => 'border-s',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'sm',
                    'class' => [
                        'border' => 'border-s-[2px]',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'md',
                    'class' => [
                        'border' => 'border-s-[3px]',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'lg',
                    'class' => [
                        'border' => 'border-s-[4px]',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'xl',
                    'class' => [
                        'border' => 'border-s-[5px]',
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
                'color' => 'neutral',
                'size' => 'xs',
                'type' => 'solid',
            ],
        );
    }
}
