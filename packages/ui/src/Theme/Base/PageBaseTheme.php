<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PageBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => 'flex flex-col lg:grid lg:grid-cols-10 lg:gap-10',
                'left' => 'lg:col-span-2',
                'center' => 'lg:col-span-8',
                'right' => 'lg:col-span-2 order-first lg:order-last',
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'left' => [
                    'true' => '',
                ],
                'right' => [
                    'true' => '',
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'left' => true,
                    'right' => true,
                    'class' => [
                        'center' => 'lg:col-span-6',
                    ],
                ],
                [
                    'left' => false,
                    'right' => false,
                    'class' => [
                        'center' => 'lg:col-span-10',
                    ],
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            ['PHdefaultVariants'],
        );
    }
}
