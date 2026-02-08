<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class AvatarBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'inline-flex items-center justify-center shrink-0 select-none rounded-full align-middle bg-elevated',
                'image' => 'h-full w-full rounded-[inherit] object-cover',
                'fallback' => 'font-medium leading-none text-muted truncate',
                'icon' => 'text-muted shrink-0',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'size' => [
                    '3xs' => [
                        'root' => 'size-4 text-[8px]',
                    ],
                    '2xs' => [
                        'root' => 'size-5 text-[10px]',
                    ],
                    'xs' => [
                        'root' => 'size-6 text-xs',
                    ],
                    'sm' => [
                        'root' => 'size-7 text-sm',
                    ],
                    'md' => [
                        'root' => 'size-8 text-base',
                    ],
                    'lg' => [
                        'root' => 'size-9 text-lg',
                    ],
                    'xl' => [
                        'root' => 'size-10 text-xl',
                    ],
                    '2xl' => [
                        'root' => 'size-11 text-[22px]',
                    ],
                    '3xl' => [
                        'root' => 'size-12 text-2xl',
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
                'size' => 'md',
            ],
        );
    }
}
