<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class SelectMenuBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'input' => 'border-b border-default',
                'focusScope' => 'flex flex-col min-h-0',
                'viewport' => 'relative scroll-py-1 overflow-y-auto flex-1',
                'content' => [
                    'contentFromParent',
                    'origin-(--reka-combobox-content-transform-origin) w-(--reka-combobox-trigger-width)',
                ],
                'trailingClear' => 'p-0',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'virtualize' => [
                    'true' => [
                        'viewport' => 'p-1 isolate',
                    ],
                    'false' => [
                        'viewport' => 'divide-y divide-default',
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
            [],
        );
    }
}
