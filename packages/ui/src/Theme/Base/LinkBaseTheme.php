<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class LinkBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [];

    protected const array VARIANTS = [
        'active' => [
            'true' => 'text-primary',
            'false' => 'text-muted',
        ],
        'disabled' => [
            'true' => 'cursor-not-allowed opacity-75',
        ],
    ];

    protected const array COMPOUND_VARIANTS = [
        [
            'active' => false,
            'disabled' => false,
            'class' => [
                'hover:text-default',
                '(options.theme.transitions) && transition-colors',
            ],
        ],
    ];

    protected const array DEFAULT_VARIANTS = [];
}
