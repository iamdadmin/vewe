<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class TextareaBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'leading' => 'absolute start-0 flex items-start',
                'trailing' => 'absolute end-0 flex items-start',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'autoresize' => [
                    'true' => [
                        'base' => 'resize-none',
                    ],
                ],
                'size' => [
                    'xs' => [
                        'leading' => 'ps-2 inset-y-1',
                        'trailing' => 'pe-2 inset-y-1',
                    ],
                    'sm' => [
                        'leading' => 'ps-2.5 inset-y-1.5',
                        'trailing' => 'pe-2.5 inset-y-1.5',
                    ],
                    'md' => [
                        'leading' => 'ps-2.5 inset-y-1.5',
                        'trailing' => 'pe-2.5 inset-y-1.5',
                    ],
                    'lg' => [
                        'leading' => 'ps-3 inset-y-2',
                        'trailing' => 'pe-3 inset-y-2',
                    ],
                    'xl' => [
                        'leading' => 'ps-3 inset-y-2',
                        'trailing' => 'pe-3 inset-y-2',
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
            ['PHdefaultVariants'],
        );
    }
}
