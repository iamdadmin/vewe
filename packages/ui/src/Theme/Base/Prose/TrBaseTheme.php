<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class TrBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => '[&:first-child>th:first-child]:rounded-tl-md [&:first-child>th:last-child]:rounded-tr-md [&:last-child>td:first-child]:rounded-bl-md [&:last-child>td:last-child]:rounded-br-md',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
