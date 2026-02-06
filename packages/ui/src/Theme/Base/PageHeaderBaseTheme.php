<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PageHeaderBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative border-b border-default py-8',
        'container' => '',
        'wrapper' => 'flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4',
        'headline' => 'mb-2.5 text-sm font-semibold text-primary flex items-center gap-1.5',
        'title' => 'text-3xl sm:text-4xl text-pretty font-bold text-highlighted',
        'description' => 'text-lg text-pretty text-muted',
        'links' => 'flex flex-wrap items-center gap-1.5',
    ];

    protected const array VARIANTS = [
        'title' => [
            'true' => [
                'description' => 'mt-4',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
