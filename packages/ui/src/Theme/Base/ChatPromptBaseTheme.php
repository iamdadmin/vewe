<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ChatPromptBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative flex flex-col items-stretch gap-2 px-2.5 py-2 w-full rounded-lg backdrop-blur',
                'header' => 'flex items-center gap-1.5',
                'body' => 'items-start',
                'footer' => 'flex items-center justify-between gap-1.5',
                'base' => 'text-base/5',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'variant' => [
                    'outline' => [
                        'root' => 'bg-default/75 ring ring-default',
                    ],
                    'soft' => [
                        'root' => 'bg-elevated/50',
                    ],
                    'subtle' => [
                        'root' => 'bg-elevated/50 ring ring-default',
                    ],
                    'naked' => [
                        'root' => '',
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
                'variant' => 'outline',
            ],
        );
    }
}
