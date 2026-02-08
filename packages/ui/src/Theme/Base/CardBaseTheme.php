<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CardBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'rounded-lg overflow-hidden',
                'header' => 'p-4 sm:px-6',
                'body' => 'p-4 sm:p-6',
                'footer' => 'p-4 sm:px-6',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'variant' => [
                    'solid' => [
                        'root' => 'bg-inverted text-inverted',
                    ],
                    'outline' => [
                        'root' => 'bg-default ring ring-default divide-y divide-default',
                    ],
                    'soft' => [
                        'root' => 'bg-elevated/50 divide-y divide-default',
                    ],
                    'subtle' => [
                        'root' => 'bg-elevated/50 ring ring-default divide-y divide-default',
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
            ],
        );
    }
}
