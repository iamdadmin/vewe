<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CodeBaseTheme implements Theme
{
    use IsTheme;

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $slots {
        get => new ImmutableArray(
            [
                'base' => 'px-1.5 py-0.5 text-sm font-mono font-medium rounded-md inline-block',
                'variants' => [
                    'color' => [
                        'color' => 'border border-phcolorph/25 bg-phcolorph/10 text-phcolorph',
                        'neutral' => 'border border-muted text-highlighted bg-muted',
                    ],
                ],
                'defaultVariants' => [
                    'color' => 'neutral',
                ],
            ],
        );
    }

    /** @var ImmutableArray<mixed,mixed> */
    public ImmutableArray $variants {
        get => new ImmutableArray(
            ['PHvariants'],
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
