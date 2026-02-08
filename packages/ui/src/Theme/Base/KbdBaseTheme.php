<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class KbdBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            ['PHslots'],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    'phcolorph' => '',
                    'neutral' => '',
                ],
                'variant' => [
                    'solid' => '',
                    'outline' => '',
                    'soft' => '',
                    'subtle' => '',
                ],
                'size' => [
                    'sm' => 'h-4 min-w-[16px] text-[10px]',
                    'md' => 'h-5 min-w-[20px] text-[11px]',
                    'lg' => 'h-6 min-w-[24px] text-[12px]',
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'color' => 'phcolorph',
                    'variant' => 'solid',
                    'class' => [
                        'base' => 'text-inverted bg-phcolorph',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'outline',
                    'class' => [
                        'base' => 'ring ring-inset ring-phcolorph/50 text-phcolorph',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'soft',
                    'class' => [
                        'base' => 'text-phcolorph bg-phcolorph/10',
                    ],
                ],
                [
                    'color' => 'phcolorph',
                    'variant' => 'subtle',
                    'class' => [
                        'base' => 'text-phcolorph ring ring-inset ring-phcolorph/25 bg-phcolorph/10',
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

    /** @var ImmutableArray<mixed,mixed> */
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
