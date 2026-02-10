<?php

use Vewe\Ui\Theme\Base\HeaderBaseTheme;

/** Props Definitions
 * The first value is the default, the remainder are natsorted
 * @var string $siteName { 'Vewe-UI' }
 * @var string $siteTo { '/' }
 * @var string $mode { 'modal' || 'drawer' || 'slideover' }
 * @var string $toggleSide { 'right' }
 * @var bool $toggle { true || false }
 */

?>
<header :class="HeaderBaseTheme::make(slot: 'root')">

    <x-slot name="top" />

    <x-vewe-container :class="HeaderBaseTheme::make(slot: 'container')">

        <x-vewe-header-left
            :siteName="$siteName ?? 'Vewe-UI"
            :siteTo="$siteTo ?? '/'"
            :toggleSide="$toggleSide ?? 'right'"
            :toggle="$toggle ?: true"
        />

        <div :class="HeaderBaseTheme::make(slot: 'center')">
            I am in the center
        </div>

        <x-vewe-header-right />

    </x-vewe-container>

    <x-slot name="bottom" />

</header>
