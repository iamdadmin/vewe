<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class BannerBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'root' => [
                    'relative z-50 w-full transition-colors',
                ],
                'container' => 'flex items-center justify-between gap-3 h-12',
                'left' => 'hidden lg:flex-1 lg:flex lg:items-center',
                'center' => 'flex items-center gap-1.5 min-w-0',
                'right' => 'lg:flex-1 flex items-center justify-end',
                'icon' => 'size-5 shrink-0 text-inverted pointer-events-none',
                'title' => 'text-sm text-inverted font-medium truncate',
                'actions' => 'flex gap-1.5 shrink-0 isolate',
                'close' => 'text-inverted hover:bg-default/10 focus-visible:bg-default/10 -me-1.5 lg:me-0',
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    $this->color => [
                        'root' => 'bg-'.$this->color,
                    ],
                    'neutral' => [
                        'root' => 'bg-inverted',
                    ],
                ],
                'to' => [
                    'true' => [
                        'root' => '',
                    ],
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
                    'color' => $this->color,
                    'to' => true,
                    'class' => [
                        'root' => 'hover:bg-'.$this->color.'/90',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'to' => true,
                    'class' => [
                        'root' => 'hover:bg-inverted/90',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'color' => 'primary',
            ],
        );
    }
}
