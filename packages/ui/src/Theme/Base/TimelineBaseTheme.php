<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class TimelineBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'flex gap-1.5',
                'item' => 'group relative flex flex-1 gap-3',
                'container' => 'relative flex items-center gap-1.5',
                'indicator' => 'group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted',
                'separator' => 'flex-1 rounded-full bg-elevated',
                'wrapper' => 'w-full',
                'date' => 'text-dimmed text-xs/5',
                'title' => 'font-medium text-highlighted text-sm',
                'description' => 'text-muted text-wrap text-sm',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'orientation' => [
                    'horizontal' => [
                        'root' => 'flex-row w-full',
                        'item' => 'flex-col',
                        'separator' => 'h-0.5',
                    ],
                    'vertical' => [
                        'root' => 'flex-col',
                        'container' => 'flex-col',
                        'separator' => 'w-0.5',
                    ],
                ],
                'color' => [
                    'color' => [
                        'indicator' => 'group-data-[state=completed]:bg-phcolorph group-data-[state=active]:bg-phcolorph',
                    ],
                    'neutral' => [
                        'indicator' => 'group-data-[state=completed]:bg-inverted group-data-[state=active]:bg-inverted',
                    ],
                ],
                'size' => [
                    '3xs' => '',
                    '2xs' => '',
                    'xs' => '',
                    'sm' => '',
                    'md' => '',
                    'lg' => '',
                    'xl' => '',
                    '2xl' => '',
                    '3xl' => '',
                ],
                'reverse' => [
                    'true' => '',
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'color' => 'phcolorph',
                    'reverse' => false,
                    'class' => [
                        'separator' => 'group-data-[state=completed]:bg-phcolorph',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'reverse' => true,
                    'class' => [
                        'separator' => 'group-data-[state=active]:bg-phcolorph group-data-[state=completed]:bg-phcolorph',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'reverse' => false,
                    'class' => [
                        'separator' => 'group-data-[state=completed]:bg-inverted',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'reverse' => true,
                    'class' => [
                        'separator' => 'group-data-[state=active]:bg-inverted group-data-[state=completed]:bg-inverted',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => '3xs',
                    'class' => [
                        'wrapper' => 'pe-4.5',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => '2xs',
                    'class' => [
                        'wrapper' => 'pe-5',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'xs',
                    'class' => [
                        'wrapper' => 'pe-5.5',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'sm',
                    'class' => [
                        'wrapper' => 'pe-6',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'md',
                    'class' => [
                        'wrapper' => 'pe-6.5',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'lg',
                    'class' => [
                        'wrapper' => 'pe-7',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => 'xl',
                    'class' => [
                        'wrapper' => 'pe-7.5',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => '2xl',
                    'class' => [
                        'wrapper' => 'pe-8',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'size' => '3xl',
                    'class' => [
                        'wrapper' => 'pe-8.5',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => '3xs',
                    'class' => [
                        'wrapper' => '-mt-0.5 pb-4.5',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => '2xs',
                    'class' => [
                        'wrapper' => 'pb-5',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'xs',
                    'class' => [
                        'wrapper' => 'mt-0.5 pb-5.5',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'sm',
                    'class' => [
                        'wrapper' => 'mt-1 pb-6',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'md',
                    'class' => [
                        'wrapper' => 'mt-1.5 pb-6.5',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'lg',
                    'class' => [
                        'wrapper' => 'mt-2 pb-7',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => 'xl',
                    'class' => [
                        'wrapper' => 'mt-2.5 pb-7.5',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => '2xl',
                    'class' => [
                        'wrapper' => 'mt-3 pb-8',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'size' => '3xl',
                    'class' => [
                        'wrapper' => 'mt-3.5 pb-8.5',
                    ],
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'size' => 'md',
                'color' => 'primary',
            ],
        );
    }
}
