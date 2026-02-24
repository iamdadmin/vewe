<?php

declare(strict_types=1);

use Vewe\Ui\Theme\Base\ButtonBaseTheme;

/**
 * @var string $to The page or full URL to link to
 * @var string $label The button label
 * @var string $leadingIcon The name of an icon to use
 * @var string $toggleIcon The name of an icon to swap to on toggle
 * @var string $trailingIcon The name of an icon to use
 * @var string $toggle The ID of element(s) to toggle
 * @var string $classNames Additional classes to merge
 * @var string $upLayer Unpoly layer attribute (e.g., 'new modal', 'new drawer')
 * @var string $upSize Unpoly size attribute (e.g., 'small', 'medium', 'large', 'full')
 * @var string $upDismissable Unpoly dismissable attribute (e.g., 'button', 'key', 'outside')
 * @var string $upAccept Unpoly accept event
 * @var string $upOnAccepted Unpoly accepted callback
 */

?>
<x-vewe-link
    :to="$to ?? '#'"
    :toggle="!isset($toggle) ? null : (isset($toggleIcon) ? ($toggle.'-menu, '.$toggle.'-close, #'.$toggle) : ('#'.$toggle))"
    :leadingIcon="$leadingIcon ?? null"
    :trailingIcon="$trailingIcon ?? null"
    :label="$label ?? null"
    :size="$size ?? null"
    :upLayer="$upLayer ?? null"
    :upSize="$upSize ?? null"
    :upDismissable="$upDismissable ?? null"
    :upAccept="$upAccept ?? null"
    :upOnAccepted="$upOnAccepted ?? null"
    :class="ButtonBaseTheme::make(slot: 'base', props: [
        'class' => $classNames ?? '',
        'variant' => $variant ?? null,
        'color' => $color ?? null,
        'size' => $size ?? 'md',
        'square' => $square ?? false,
        'block' => $block ?? false,
        'fieldGroup' => $fieldGroup ?? '',
        'leading' => isset($leadingIcon) || isset($leadingAvatar),
        'trailing' => isset($trailingIcon),
    ])">
    <x-template :isset="$toggleIcon">
        <x-vewe-icon 
            :name="$leadingIcon" 
            :id="$toggle.'-menu'"
            :class="ButtonBaseTheme::make(slot: 'leadingIcon')" 
        />
        <x-vewe-icon 
            :name="$toggleIcon" 
            :id="$toggle.'-close'"
            :class="ButtonBaseTheme::make(slot: 'leadingIcon')" 
            hidden 
        />
    </x-template>
    <x-template :else>
        <x-vewe-icon :isset="$leadingIcon" :name="$leadingIcon" :class="ButtonBaseTheme::make(slot: 'leadingIcon')" />
    </x-template>

    <span :isset="$label" :class="ButtonBaseTheme::make(slot: 'label', props: ['size' => $size ?? 'md'])">{{ $label ?? '' }}</span>

    <x-vewe-icon :isset="$trailingIcon" :name="$trailingIcon" :class="$classTrailingIcon ?? 'shrink-0'" />
</x-vewe-link>
