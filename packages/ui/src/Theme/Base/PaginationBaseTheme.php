<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class PaginationBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => '',
        'list' => 'flex items-center gap-1',
        'ellipsis' => 'pointer-events-none',
        'label' => 'min-w-5 text-center',
        'first' => '',
        'prev' => '',
        'item' => '',
        'next' => '',
        'last' => '',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
