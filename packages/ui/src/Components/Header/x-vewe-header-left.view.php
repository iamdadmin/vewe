<?php

use Vewe\Ui\Theme\Base\HeaderBaseTheme;

/** Props Definitions
 * The first value is the default, the options are natsorted
 * @var string $siteName { 'Vewe-UI' }
 * @var string $siteTo { '/' }
 * @var string $toggleSide { 'right' }
 * @var bool $toggle { true || false }
 */
?>
<div :class="HeaderBaseTheme::make(slot: 'left')">
    <x-vewe-header-menu-toggle :if="toggleSide == 'left'" />

    <x-slot name="left">
        <x-vewe-link
            :to="$siteTo"
            :class="ui.title({ class: props.ui?.title })"
        >{{ $title }}</x-vewe-link>
    </x-slot>
</div>
