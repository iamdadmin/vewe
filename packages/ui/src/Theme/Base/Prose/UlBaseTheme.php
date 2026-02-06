<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class UlBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => 'list-disc ps-6 my-5 marker:text-(--ui-border-accented)',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
