<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class TextareaBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'leading' => 'absolute start-0 flex items-start',
        'trailing' => 'absolute end-0 flex items-start',
    ];

    protected const array VARIANTS = [
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
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
