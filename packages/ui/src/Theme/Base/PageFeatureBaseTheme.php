<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PageFeatureBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative rounded-sm',
        'wrapper' => '',
        'leading' => 'inline-flex items-center justify-center',
        'leadingIcon' => 'size-5 shrink-0 text-primary',
        'title' => 'text-base text-pretty font-semibold text-highlighted',
        'description' => 'text-[15px] text-pretty text-muted',
    ];

    protected const array VARIANTS = [
        'orientation' => [
            'horizontal' => [
                'root' => 'flex items-start gap-2.5',
                'leading' => 'p-0.5',
            ],
            'vertical' => [
                'leading' => 'mb-2.5',
            ],
        ],
        'to' => [
            'true' => [
                'root' => [
                    'has-focus-visible:ring-2 has-focus-visible:ring-primary',
                    '(options.theme.transitions) && transition',
                ],
            ],
        ],
        'title' => [
            'true' => [
                'description' => 'mt-1',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
