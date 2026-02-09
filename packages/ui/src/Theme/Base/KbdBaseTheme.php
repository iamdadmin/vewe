<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class KbdBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed>
     * @return \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    $this->color => [
                        'base' => '',
                    ],
                    'neutral' => [
                        'base' => '',
                    ],
                ],
                'variant' => [
                    'solid' => [
                        'base' => '',
                    ],
                    'outline' => [
                        'base' => '',
                    ],
                    'soft' => [
                        'base' => '',
                    ],
                    'subtle' => [
                        'base' => '',
                    ],
                ],
                'size' => [
                    'sm' => [
                        'base' => 'h-4 min-w-[16px] text-[10px]',
                    ],
                    'md' => [
                        'base' => 'h-5 min-w-[20px] text-[11px]',
                    ],
                    'lg' => [
                        'base' => 'h-6 min-w-[24px] text-[12px]',
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
                    'variant' => 'solid',
                    'class' => [
                        'base' => 'text-inverted bg-'.$this->color,
                    ],
                ],
                [
                    'color' => $this->color,
                    'variant' => 'outline',
                    'class' => [
                        'base' => 'ring ring-inset ring-'.$this->color.'/50 text-'.$this->color,
                    ],
                ],
                [
                    'color' => $this->color,
                    'variant' => 'soft',
                    'class' => [
                        'base' => 'text-'.$this->color.' bg-'.$this->color.'/10',
                    ],
                ],
                [
                    'color' => $this->color,
                    'variant' => 'subtle',
                    'class' => [
                        'base' => 'text-'.$this->color.' ring ring-inset ring-'.$this->color.'/25 bg-'.$this->color.'/10',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'solid',
                    'class' => [
                        'base' => 'text-inverted bg-inverted',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'outline',
                    'class' => [
                        'base' => 'ring ring-inset ring-accented text-default bg-default',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'soft',
                    'class' => [
                        'base' => 'text-default bg-elevated',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'variant' => 'subtle',
                    'class' => [
                        'base' => 'ring ring-inset ring-accented text-default bg-elevated',
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
                'variant' => 'outline',
                'color' => 'neutral',
                'size' => 'md',
            ],
        );
    }
}
