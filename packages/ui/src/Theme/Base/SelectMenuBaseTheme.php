<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class SelectMenuBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'input' => 'border-b border-default',
        'focusScope' => 'flex flex-col min-h-0',
        'viewport' => 'relative scroll-py-1 overflow-y-auto flex-1',
        'content' => [
            'contentFromParent',
            'origin-(--reka-combobox-content-transform-origin) w-(--reka-combobox-trigger-width)',
        ],
        'trailingClear' => 'p-0',
    ];

    protected const array VARIANTS = [
        'virtualize' => [
            'true' => [
                'viewport' => 'p-1 isolate',
            ],
            'false' => [
                'viewport' => 'divide-y divide-default',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
