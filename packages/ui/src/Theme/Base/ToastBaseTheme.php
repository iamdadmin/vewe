<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ToastBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative group overflow-hidden bg-default shadow-lg rounded-lg ring ring-default p-4 flex gap-2.5 focus:outline-none',
                'wrapper' => 'w-0 flex-1 flex flex-col',
                'title' => 'text-sm font-medium text-highlighted',
                'description' => 'text-sm text-muted',
                'icon' => 'shrink-0 size-5',
                'avatar' => 'shrink-0',
                'avatarSize' => '2xl',
                'actions' => 'flex gap-1.5 shrink-0',
                'progress' => 'absolute inset-x-0 bottom-0',
                'close' => 'p-0',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    'phcolorph' => [
                        'root' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-phcolorph',
                        'icon' => 'text-phcolorph',
                    ],
                    'neutral' => [
                        'root' => 'focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
                        'icon' => 'text-highlighted',
                    ],
                ],
                'orientation' => [
                    'horizontal' => [
                        'root' => 'items-center',
                        'actions' => 'items-center',
                    ],
                    'vertical' => [
                        'root' => 'items-start',
                        'actions' => 'items-start mt-2.5',
                    ],
                ],
                'title' => [
                    'true' => [
                        'description' => 'mt-1',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'color' => 'primary',
            ],
        );
    }
}
