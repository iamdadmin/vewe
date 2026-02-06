<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CodeBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => 'px-1.5 py-0.5 text-sm font-mono font-medium rounded-md inline-block',
        'variants' => [
            'color' => [
                'color' => 'border border-${color}/25 bg-${color}/10 text-${color}',
                'neutral' => 'border border-muted text-highlighted bg-muted',
            ],
        ],
        'defaultVariants' => [
            'color' => 'neutral',
        ],
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
