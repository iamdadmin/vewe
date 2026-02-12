<?php

use Vewe\Ui\Theme\Base\HeaderBaseTheme;

/** Props Definitions
 * The first value is the default, the remainder are natsorted
 * @var string $siteName { 'Vewe-UI' }
 * @var string $siteTo { '/' }
 * @var string $mode { 'modal' || 'drawer' || 'slideover' }
 * @var string $toggleSide { 'right' }
 */

?>
<header :class="HeaderBaseTheme::make(slot: 'root')">

    <x-slot name="top" />

    <x-vewe-container :class="HeaderBaseTheme::make(slot: 'container')">

        <x-slot name="left">
            <x-vewe-header-left
                :siteName="$siteName ?? 'Vewe-UI'"
                :siteTo="$siteTo ?? '/'"
                :toggleSide="$toggleSide ?? 'right'"
                elementToToggle="x-vewe-header-menu-container"
            />
        </x-slot>

        <div :class="HeaderBaseTheme::make(slot: 'center')">
            I am in the center
        </div>
        
        <x-slot name="right">
            <x-vewe-header-right
                :toggleSide="$toggleSide ?? 'right'"
                elementToToggle="x-vewe-header-menu-container"
            />
        </x-slot>

    </x-vewe-container>

    <x-slot name="bottom" />

</header>

<x-template :if="($mode ?? '') == 'slideover'" />

<x-template :elseif="($mode ?? '') == 'drawer'" />

<x-template :elseif="($mode ?? 'modal') == 'modal'" />
