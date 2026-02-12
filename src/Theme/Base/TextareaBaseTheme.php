<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;
use Vewe\Ui\Theme\Base\InputBaseTheme;

final class TextareaBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => (new InputBaseTheme())->slots->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [
                'leading' => 'absolute start-0 flex items-start',
                'trailing' => 'absolute end-0 flex items-start',
            ],
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => (new InputBaseTheme())->variants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
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
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => (new InputBaseTheme())->compoundVariants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [],
            ),
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => (new InputBaseTheme())->defaultVariants->merge(
            // @mago-expect analysis:less-specific-argument
            new ImmutableArray(
                [],
            ),
        );
    }
}
