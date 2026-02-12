<?php

declare(strict_types=1);

use Vewe\Ui\Theme\Base\ButtonBaseTheme;

/**
 * @var string $to The page or full URL to link to
 * @var string $label The button label
 * @var string $leadingIcon The name of an icon to use
 * @var string $trailingIcon The name of an icon to use
 * @var string $classNames Additional classes to merge
 */

?>
<x-link
    :to="$to"
    :leadingIcon="$leadingIcon ?? null"
    :trailingIcon="$trailingIcon ?? null"
    :label="$label ?? null"
    :class="ButtonBaseTheme::make(slot: 'base', props: [
        'class' => $classNames ?? '',
        'variant' => $variant ?? null,
        'color' => $color,
        'size' => $size ?? 'md',
        'square' => $square ?? false,
        'block' => $block ?? false,
        'fieldGroup' => $fieldGroup ?? '',
        'leading' => (isset($leadingIcon) || isset($leadingAvatar)) ?: false,
        'trailing' => isset($trailingIcon) ?: false,
    ])">
    <x-template :isset="$toggleIcon" :toggleId="uniqid('toggle-')">
        <x-vewe-icon 
            :name="$leadingIcon" 
            :id="$toggleId.'-menu'"
            :class="ButtonBaseTheme::make(slot: 'leadingIcon')" 
        />
        <x-vewe-icon 
            :name="$toggleIcon" 
            :id="$toggleId.'-close'"
            :class="ButtonBaseTheme::make(slot: 'leadingIcon')" 
            hidden 
        />
    </x-template>
    
    <x-template :else>
        <x-vewe-icon :isset="$leadingIcon" :name="$leadingIcon"
            :class="ButtonBaseTheme::make(slot: 'leadingIcon')" />

        <span :class="ButtonBaseTheme::make(slot: 'label', props: ['size' => $size ?? 'md'])">
            <x-template :isset="$label">{{ $label }}</x-template>
            <x-template :else>Link</x-template>
        </span>

        <x-vewe-icon :isset="$trailingIcon" :name="$trailingIcon" :class="$classTrailingIcon ?? 'shrink-0'" />

    </x-template>
</x-link>
