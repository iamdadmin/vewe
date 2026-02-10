<?php

declare(strict_types=1);

use Vewe\Ui\Theme\Base\ButtonBaseTheme;

/**
 * @var string $to The page or full URL to link to
 * @var string $label The button label
 * @var string $leadingIcon The name of an icon to use
 * @var string $trailingIcon The name of an icon to use
 */

?>
<x-link
    :to="$to"
    :leadingIcon="$leadingIcon ?? null"
    :trailingIcon="$trailingIcon ?? null"
    :label="$label ?? null"
    :class="ButtonBaseTheme::make(slot: 'base', props: [
        'variant' => $variant ?? null,
        'color' => $color,
        'size' => $size ?? 'md',
        'square' => $square ?? false,
        'block' => $block ?? false,
    ])" />
