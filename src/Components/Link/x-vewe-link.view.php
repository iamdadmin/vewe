<?php

/** Props Definitions
 * The first value is the default, the options are natsorted
 * @var bool $disabled { false || true }
 * @var string $to { '/' }
 * @var string $rel { null | 'noopener' | 'noreferrer' | "nofollow' | 'sponsored' | 'ugc' | (more than one) }
 * @var string $target { '' for local, '_blank' for external || {user-defined} }
 */

// NOTE: Make sure not to put spaces before and after the default slot as it will render whitespace
?>
<a 
    :if="isset($to) && $to != ''"
    :href="($disabled ?? false) ? '' : $to"
    :aria-disabled="($disabled ?? false) ? true : ''"
    :role="($disabled ?? false) ? 'link' : ''"
    :disabled="$disabled ?? ''"
    :rel="$rel ?? (str_contains($to, '://') ? 'noopener noreferrer' : '')"
    :target="$target ?? (str_contains($to, '://') ? '_blank' : '')"
    :class="$class ?? ''"
><x-slot /></a>
<button
    :else
    :disabled="$disabled ?? ''"
    :rel="$rel ?? (str_contains($to, '://') ? 'noopener noreferrer' : '')"
    :target="$target ?? (str_contains($to, '://') ? '_blank' : '')"
    :class="$class ?? ''"
><x-slot /></button>
