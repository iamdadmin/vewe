<?php

/** Props Definitions
 * The first value is the default, the options are natsorted
 * @var bool $disabled { false || true }
 * @var string $to { '/' || (user-defined) }
 * @var string $rel { null | 'noopener' | 'noreferrer' | "nofollow' | 'sponsored' | 'ugc' | (more than one) }
 * @var string $target { '' for local, '_blank' for external || {user-defined} }
 */

// NOTE: Make sure not to put spaces before and after the default slot as it will render whitespace
?>
<a 
    :isset="$to"
    :href="$disabled ? '' : $to"
    :aria-disabled="$disabled ? 'true' : ''"
    :role="$disabled ? 'link' : ''"
    :disabled="$disabled ?: false"
    :rel="$rel ?? (str_contains($to, '://') ? 'noopener noreferrer' : '')"
    :target="$target ?? (str_contains($to, '://') ? '_blank' : '')"
><x-slot /></a>
<button
    :else
    :disabled="$disabled ?: false"
    :rel="$rel ?? (str_contains($to, '://') ? 'noopener noreferrer' : '')"
    :target="$target ?? (str_contains($to, '://') ? '_blank' : '')"
><x-slot /></button>
