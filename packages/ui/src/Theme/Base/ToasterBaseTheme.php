<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ToasterBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'viewport' => 'fixed flex flex-col w-[calc(100%-2rem)] sm:w-96 z-[100] data-[expanded=true]:h-(--height) focus:outline-none',
                'base' => 'pointer-events-auto absolute inset-x-0 z-(--index) transform-(--transform) data-[expanded=false]:data-[front=false]:h-(--front-height) data-[expanded=false]:data-[front=false]:*:opacity-0 data-[front=false]:*:transition-opacity data-[front=false]:*:duration-100 data-[state=closed]:animate-[toast-closed_200ms_ease-in-out] data-[state=closed]:data-[expanded=false]:data-[front=false]:animate-[toast-collapsed-closed_200ms_ease-in-out] data-[swipe=move]:transition-none transition-[transform,translate,height] duration-200 ease-out',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'position' => [
                    'top-left' => [
                        'viewport' => 'left-4',
                    ],
                    'top-center' => [
                        'viewport' => 'left-1/2 transform -translate-x-1/2',
                    ],
                    'top-right' => [
                        'viewport' => 'right-4',
                    ],
                    'bottom-left' => [
                        'viewport' => 'left-4',
                    ],
                    'bottom-center' => [
                        'viewport' => 'left-1/2 transform -translate-x-1/2',
                    ],
                    'bottom-right' => [
                        'viewport' => 'right-4',
                    ],
                ],
                'swipeDirection' => [
                    'up' => 'data-[swipe=end]:animate-[toast-slide-up_200ms_ease-out]',
                    'right' => 'data-[swipe=end]:animate-[toast-slide-right_200ms_ease-out]',
                    'down' => 'data-[swipe=end]:animate-[toast-slide-down_200ms_ease-out]',
                    'left' => 'data-[swipe=end]:animate-[toast-slide-left_200ms_ease-out]',
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'position' => [
                        'top-left',
                        'top-center',
                        'top-right',
                    ],
                    'class' => [
                        'viewport' => 'top-4',
                        'base' => 'top-0 data-[state=open]:animate-[slide-in-from-top_200ms_ease-in-out]',
                    ],
                ],
                [
                    'position' => [
                        'bottom-left',
                        'bottom-center',
                        'bottom-right',
                    ],
                    'class' => [
                        'viewport' => 'bottom-4',
                        'base' => 'bottom-0 data-[state=open]:animate-[slide-in-from-bottom_200ms_ease-in-out]',
                    ],
                ],
                [
                    'swipeDirection' => [
                        'left',
                        'right',
                    ],
                    'class' => 'data-[swipe=move]:translate-x-(--reka-toast-swipe-move-x) data-[swipe=end]:translate-x-(--reka-toast-swipe-end-x) data-[swipe=cancel]:translate-x-0',
                ],
                [
                    'swipeDirection' => [
                        'up',
                        'down',
                    ],
                    'class' => 'data-[swipe=move]:translate-y-(--reka-toast-swipe-move-y) data-[swipe=end]:translate-y-(--reka-toast-swipe-end-y) data-[swipe=cancel]:translate-y-0',
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'position' => 'bottom-right',
            ],
        );
    }
}
