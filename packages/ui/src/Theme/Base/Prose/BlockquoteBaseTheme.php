<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class BlockquoteBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => 'border-s-4 border-accented ps-4 italic',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
