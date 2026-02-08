<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class EmptyBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative flex flex-col items-center justify-center gap-4 rounded-lg p-4 sm:p-6 lg:p-8 min-w-0',
                'header' => 'flex flex-col items-center gap-2 max-w-sm text-center',
                'avatar' => 'shrink-0 mb-2',
                'title' => 'text-highlighted text-pretty font-medium',
                'description' => 'text-balance text-center',
                'body' => 'flex flex-col items-center gap-4 max-w-sm',
                'actions' => 'flex flex-wrap justify-center gap-2 shrink-0',
                'footer' => 'flex flex-col items-center gap-2 max-w-sm',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'size' => [
                    'xs' => [
                        'avatar' => 'size-8 text-base',
                        'title' => 'text-sm',
                        'description' => 'text-xs',
                    ],
                    'sm' => [
                        'avatar' => 'size-9 text-lg',
                        'title' => 'text-sm',
                        'description' => 'text-xs',
                    ],
                    'md' => [
                        'avatar' => 'size-10 text-xl',
                        'title' => 'text-base',
                        'description' => 'text-sm',
                    ],
                    'lg' => [
                        'avatar' => 'size-11 text-[22px]',
                        'title' => 'text-base',
                        'description' => 'text-sm',
                    ],
                    'xl' => [
                        'avatar' => 'size-12 text-2xl',
                        'title' => 'text-lg',
                        'description' => 'text-base',
                    ],
                ],
                'variant' => [
                    'solid' => [
                        'root' => 'bg-inverted',
                        'title' => 'text-inverted',
                        'description' => 'text-dimmed',
                    ],
                    'outline' => [
                        'root' => 'bg-default ring ring-default',
                        'description' => 'text-muted',
                    ],
                    'soft' => [
                        'root' => 'bg-elevated/50',
                        'description' => 'text-toned',
                    ],
                    'subtle' => [
                        'root' => 'bg-elevated/50 ring ring-default',
                        'description' => 'text-toned',
                    ],
                    'naked' => [
                        'description' => 'text-muted',
                    ],
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            ['PHcompoundVariants'],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'variant' => 'outline',
                'size' => 'md',
            ],
        );
    }
}
