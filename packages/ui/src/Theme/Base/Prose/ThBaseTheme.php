<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ThBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => 'py-3 px-4 font-semibold text-sm border-e border-b first:border-s border-t border-muted',
        'variants' => [
            'align' => [
                'left' => 'text-left',
                'center' => 'text-center',
                'right' => 'text-right',
            ],
        ],
        'defaultVariants' => [
            'align' => 'left',
        ],
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
