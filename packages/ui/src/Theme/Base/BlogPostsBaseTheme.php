<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class BlogPostsBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [];

    protected const array VARIANTS = [
        'orientation' => [
            'horizontal' => 'sm:grid sm:grid-cols-2 lg:grid-cols-3',
            'vertical' => '',
        ],
    ];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
