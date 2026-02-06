<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base\Prose;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

final class AccordionItemBaseTheme implements Theme
{
    use IsTheme;

    protected const array SLOTS = [
        'base' => 'pb-4 text-muted *:first:mt-0 *:last:mb-0 *:my-1.5',
    ];

    protected const array VARIANTS = [];

    protected const array COMPOUND_VARIANTS = [];

    protected const array DEFAULT_VARIANTS = [];
}
