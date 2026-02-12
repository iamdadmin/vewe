<?php

use Vewe\Ui\Theme\Base\HeaderBaseTheme;

/** Props Definitions
 * The first value is the default, the options are natsorted
 * @var string $siteName { 'Vewe-UI' }
 * @var string $siteTo { '/' }
 * @var string $toggleSide { 'right' }
 * @var string $elementToToggle { '' }
 * @var string $classNames { '' }
 */
?>
<div :class="HeaderBaseTheme::make(slot: 'left')">
    <x-vewe-header-menu-toggle
        :if="($toggleSide ?? '') == 'left'"
        :elementToToggle="$elementToToggle ?? ''"
    />

    <x-slot>
        <x-vewe-link
            :to="$siteTo ?? '/'"
            :siteName="$siteName ?? 'Vewe-UI'"
            :class="HeaderBaseTheme::make(slot: 'title', props: ['class' => $classNames ?? ''])"
        >{{ $siteName }}</x-vewe-link>
    </x-slot>
</div>
