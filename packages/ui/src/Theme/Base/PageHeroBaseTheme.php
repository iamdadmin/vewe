<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PageHeroBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative isolate',
        'container' => 'flex flex-col lg:grid py-24 sm:py-32 lg:py-40 gap-16 sm:gap-y-24',
        'wrapper' => '',
        'header' => '',
        'headline' => 'mb-4',
        'title' => 'text-5xl sm:text-7xl text-pretty tracking-tight font-bold text-highlighted',
        'description' => 'text-lg sm:text-xl/8 text-muted',
        'body' => 'mt-10',
        'footer' => 'mt-10',
        'links' => 'flex flex-wrap gap-x-6 gap-y-3',
    ];

    protected const array VARIANTS = [
        'orientation' => [
            'horizontal' => [
                'container' => 'lg:grid-cols-2 lg:items-center',
                'description' => 'text-pretty',
            ],
            'vertical' => [
                'container' => '',
                'headline' => 'justify-center',
                'wrapper' => 'text-center',
                'description' => 'text-balance',
                'links' => 'justify-center',
            ],
        ],
        'reverse' => [
            'true' => [
                'wrapper' => 'order-last',
            ],
        ],
        'headline' => [
            'true' => [
                'headline' => 'font-semibold text-primary flex items-center gap-1.5',
            ],
        ],
        'title' => [
            'true' => [
                'description' => 'mt-6',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
