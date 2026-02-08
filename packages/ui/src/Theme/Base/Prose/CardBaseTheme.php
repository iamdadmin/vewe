<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CardBaseTheme implements Theme
{
    use IsTheme;

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'base' => [
                    'group relative block my-5 p-4 sm:p-6 border border-default rounded-md bg-default',
                    '(options.theme.transitions) && transition-colors',
                ],
                'icon' => 'size-6 mb-2 block',
                'title' => 'text-highlighted font-semibold',
                'description' => 'text-[15px] text-muted *:first:mt-0 *:last:mb-0 *:my-1',
                'externalIcon' => [
                    'size-4 align-top absolute right-2 top-2 text-dimmed pointer-events-none',
                    '(options.theme.transitions) && transition-colors',
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            [
                'color' => [
                    'phcolorph' => [
                        'icon' => 'text-phcolorph',
                    ],
                    'neutral' => [
                        'icon' => 'text-highlighted',
                    ],
                ],
                'to' => [
                    'true' => '',
                ],
                'title' => [
                    'true' => [
                        'description' => 'mt-1',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $compoundVariants {
        get => new ImmutableArray(
            [
                [
                    'color' => 'phcolorph',
                    'to' => true,
                    'class' => [
                        'base' => 'hover:bg-phcolorph/10 hover:border-phcolorph has-focus-visible:border-phcolorph',
                        'externalIcon' => 'group-hover:text-phcolorph',
                    ],
                ],
                [
                    'color' => 'neutral',
                    'to' => true,
                    'class' => [
                        'base' => 'hover:bg-elevated/50 hover:border-inverted has-focus-visible:border-inverted',
                        'externalIcon' => 'group-hover:text-highlighted',
                    ],
                ],
            ],
        );
    }

    /** @var \Tempest\Support\Arr\ImmutableArray<mixed,mixed> */
    public ImmutableArray $defaultVariants {
        get => new ImmutableArray(
            [
                'color' => 'primary',
            ],
        );
    }
}
