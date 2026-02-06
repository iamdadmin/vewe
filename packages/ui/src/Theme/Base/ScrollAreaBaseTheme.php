<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ScrollAreaBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative',
        'viewport' => 'relative flex',
        'item' => '',
    ];

    protected const array VARIANTS = [
        'orientation' => [
            'vertical' => [
                'root' => 'overflow-y-auto overflow-x-hidden',
                'viewport' => 'flex-col',
                'item' => '',
            ],
            'horizontal' => [
                'root' => 'overflow-x-auto overflow-y-hidden',
                'viewport' => 'flex-row',
                'item' => '',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
