<?php

declare(strict_types=1);

/**
 * @var bool $disabled Whether it's disabled, default false
 * @var string $to The destination
 */

?>
<a :href="$to" :class="$class">
    <x-vewe-icon :isset="$leadingIcon" :name="$leadingIcon" :class="$classLeadingIcon ?? 'shrink-0'" />

    <span :class="$classLabel ?? 'truncate'">
        <x-template :isset="$label">{{ $label }}</x-template>
        <x-template :else>Link</x-template>
    </span>

    <x-vewe-icon :isset="$trailingIcon" :name="$trailingIcon" :class="$classTrailingIcon ?? 'shrink-0'" />
</a>
