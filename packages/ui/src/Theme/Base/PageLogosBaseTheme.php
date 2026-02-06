<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PageLogosBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative overflow-hidden',
        'title' => 'text-lg text-center font-semibold text-highlighted',
        'logos' => 'mt-10',
        'logo' => 'size-10 shrink-0',
    ];

    protected const array VARIANTS = [
        'marquee' => [
            'false' => [
                'logos' => 'flex items-center shrink-0 justify-around gap-(--gap) [--gap:--spacing(16)]',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
