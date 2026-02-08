<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PageFeatureBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'relative rounded-sm',
                'wrapper' => '',
                'leading' => 'inline-flex items-center justify-center',
                'leadingIcon' => 'size-5 shrink-0 text-primary',
                'title' => 'text-base text-pretty font-semibold text-highlighted',
                'description' => 'text-[15px] text-pretty text-muted',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'orientation' => [
                    'horizontal' => [
                        'root' => 'flex items-start gap-2.5',
                        'leading' => 'p-0.5',
                    ],
                    'vertical' => [
                        'leading' => 'mb-2.5',
                    ],
                ],
                'to' => [
                    'true' => [
                        'root' => [
                            'has-focus-visible:ring-2 has-focus-visible:ring-primary',
                            '(options.theme.transitions) && transition',
                        ],
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

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [],
        );
    }
}
