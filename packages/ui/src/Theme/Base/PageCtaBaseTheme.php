<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PageCtaBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative isolate rounded-xl overflow-hidden',
        'container' => 'flex flex-col lg:grid px-6 py-12 sm:px-12 sm:py-24 lg:px-16 lg:py-24 gap-8 sm:gap-16',
        'wrapper' => '',
        'header' => '',
        'title' => 'text-3xl sm:text-4xl text-pretty tracking-tight font-bold text-highlighted',
        'description' => 'text-base sm:text-lg text-muted',
        'body' => 'mt-8',
        'footer' => 'mt-8',
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
                'title' => 'text-center',
                'description' => 'text-center text-balance',
                'links' => 'justify-center',
            ],
        ],
        'reverse' => [
            'true' => [
                'wrapper' => 'order-last',
            ],
        ],
        'variant' => [
            'solid' => [
                'root' => 'bg-inverted text-inverted',
                'title' => 'text-inverted',
                'description' => 'text-dimmed',
            ],
            'outline' => [
                'root' => 'bg-default ring ring-default',
                'description' => 'text-muted',
            ],
            'soft' => [
                'root' => 'bg-elevated/50',
                'description' => 'text-toned',
            ],
            'subtle' => [
                'root' => 'bg-elevated/50 ring ring-default',
                'description' => 'text-toned',
            ],
            'naked' => [
                'description' => 'text-muted',
            ],
        ],
        'title' => [
            'true' => [
                'description' => 'mt-6',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [
        'variant' => 'outline',
    ];
}
