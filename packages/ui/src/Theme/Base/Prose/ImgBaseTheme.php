<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class ImgBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => 'rounded-md w-full',
        'overlay' => 'fixed inset-0 bg-default/75 backdrop-blur-sm will-change-opacity',
        'content' => 'fixed inset-0 flex items-center justify-center cursor-zoom-out focus:outline-none',
        'zoomedImage' => 'w-full h-auto max-w-[95vw] max-h-[95vh] object-contain rounded-md',
    ];

    protected const array VARIANTS = [
        'zoom' => [
            'true' => 'will-change-transform',
        ],
        'open' => [
            'true' => [
                'base' => '',
            ],
        ],
    ];

    protected const array COMPOUND_VARIANTS = [
        [
            'zoom' => true,
            'open' => false,
            'class' => [
                'base' => 'cursor-zoom-in',
            ],
        ],
    ];

    protected const array DEFAULT_VARIANTS = [];
}
