<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class TabsBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'flex items-center gap-2',
                'list' => 'relative flex p-1 group',
                'indicator' => 'absolute transition-[translate,width] duration-200',
                'trigger' => [
                    'group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75',
                    '(options.theme.transitions) && transition-colors',
                ],
                'leadingIcon' => 'shrink-0',
                'leadingAvatar' => 'shrink-0',
                'leadingAvatarSize' => '',
                'label' => 'truncate',
                'trailingBadge' => 'shrink-0',
                'trailingBadgeSize' => 'sm',
                'content' => 'focus:outline-none w-full',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    'phcolorph' => [
                        'base' => '',
                    ],
                    'neutral' => [
                        'base' => '',
                    ],
                ],
                'variant' => [
                    'pill' => [
                        'list' => 'bg-elevated rounded-lg',
                        'trigger' => 'grow',
                        'indicator' => 'rounded-md shadow-xs',
                    ],
                    'link' => [
                        'list' => 'border-default',
                        'indicator' => 'rounded-full',
                        'trigger' => 'focus:outline-none',
                    ],
                ],
                'orientation' => [
                    'horizontal' => [
                        'root' => 'flex-col',
                        'list' => 'w-full',
                        'indicator' => 'left-0 w-(--reka-tabs-indicator-size) translate-x-(--reka-tabs-indicator-position)',
                        'trigger' => 'justify-center',
                    ],
                    'vertical' => [
                        'list' => 'flex-col',
                        'indicator' => 'top-0 h-(--reka-tabs-indicator-size) translate-y-(--reka-tabs-indicator-position)',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'trigger' => 'px-2 py-1 text-xs gap-1',
                        'leadingIcon' => 'size-4',
                        'leadingAvatarSize' => '3xs',
                    ],
                    'sm' => [
                        'trigger' => 'px-2.5 py-1.5 text-xs gap-1.5',
                        'leadingIcon' => 'size-4',
                        'leadingAvatarSize' => '3xs',
                    ],
                    'md' => [
                        'trigger' => 'px-3 py-1.5 text-sm gap-1.5',
                        'leadingIcon' => 'size-5',
                        'leadingAvatarSize' => '2xs',
                    ],
                    'lg' => [
                        'trigger' => 'px-3 py-2 text-sm gap-2',
                        'leadingIcon' => 'size-5',
                        'leadingAvatarSize' => '2xs',
                    ],
                    'xl' => [
                        'trigger' => 'px-3 py-2 text-base gap-2',
                        'leadingIcon' => 'size-6',
                        'leadingAvatarSize' => 'xs',
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
                    'variant' => 'pill',
                    'class' => [
                        'indicator' => 'inset-y-1',
                    ],
                ],
                [
                    'orientation' => 'horizontal',
                    'variant' => 'link',
                    'class' => [
                        'list' => 'border-b -mb-px',
                        'indicator' => '-bottom-px h-px',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'variant' => 'pill',
                    'class' => [
                        'indicator' => 'inset-x-1',
                        'list' => 'items-center',
                    ],
                ],
                [
                    'orientation' => 'vertical',
                    'variant' => 'link',
                    'class' => [
                        'list' => 'border-s -ms-px',
                        'indicator' => '-start-px w-px',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'pill',
                    'class' => [
                        'indicator' => 'bg-phcolorph',
                        'trigger' => 'data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-phcolorph',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'pill',
                    'class' => [
                        'indicator' => 'bg-inverted',
                        'trigger' => 'data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-inverted',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'link',
                    'class' => [
                        'indicator' => 'bg-phcolorph',
                        'trigger' => 'data-[state=active]:text-phcolorph focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-phcolorph',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'link',
                    'class' => [
                        'indicator' => 'bg-inverted',
                        'trigger' => 'data-[state=active]:text-highlighted focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'color' => 'phcolorph',
                'variant' => 'pill',
                'size' => 'md',
            ],
        );
    }
}
