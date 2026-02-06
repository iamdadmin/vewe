<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class FieldGroupBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => 'my-5 divide-y divide-default *:not-last:pb-5',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
