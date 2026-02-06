<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class CardGroupBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => 'grid grid-cols-1 sm:grid-cols-2 gap-5 my-5 *:my-0',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
