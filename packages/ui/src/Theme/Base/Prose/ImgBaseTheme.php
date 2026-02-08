<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ImgBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'base' => 'rounded-md w-full',
                'overlay' => 'fixed inset-0 bg-default/75 backdrop-blur-sm will-change-opacity',
                'content' => 'fixed inset-0 flex items-center justify-center cursor-zoom-out focus:outline-none',
                'zoomedImage' => 'w-full h-auto max-w-[95vw] max-h-[95vh] object-contain rounded-md',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'zoom' => [
                    'true' => 'will-change-transform',
                ],
                'open' => [
                    'true' => '',
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'zoom' => true,
                    'open' => false,
                    'class' => [
                        'base' => 'cursor-zoom-in',
                    ],
                ],
            ],
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
