<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class TableBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'root' => 'relative my-5 overflow-x-auto',
        'base' => 'w-full border-separate border-spacing-0 rounded-md',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
