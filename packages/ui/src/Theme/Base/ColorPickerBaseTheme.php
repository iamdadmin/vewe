<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ColorPickerBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'data-[disabled]:opacity-75',
                'picker' => 'flex gap-4',
                'selector' => 'rounded-md touch-none',
                'selectorBackground' => 'w-full h-full relative rounded-md',
                'selectorThumb' => '-translate-y-1/2 -translate-x-1/2 absolute size-4 ring-2 ring-white rounded-full cursor-pointer data-[disabled]:cursor-not-allowed',
                'track' => 'w-[8px] relative rounded-md touch-none',
                'trackThumb' => 'absolute transform -translate-y-1/2 -translate-x-[4px] rtl:translate-x-[4px] size-4 rounded-full ring-2 ring-white cursor-pointer data-[disabled]:cursor-not-allowed',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'size' => [
                    'xs' => [
                        'selector' => 'w-38 h-38',
                        'track' => 'h-38',
                    ],
                    'sm' => [
                        'selector' => 'w-40 h-40',
                        'track' => 'h-40',
                    ],
                    'md' => [
                        'selector' => 'w-42 h-42',
                        'track' => 'h-42',
                    ],
                    'lg' => [
                        'selector' => 'w-44 h-44',
                        'track' => 'h-44',
                    ],
                    'xl' => [
                        'selector' => 'w-46 h-46',
                        'track' => 'h-46',
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
                'size' => 'md',
            ],
        );
    }
}
