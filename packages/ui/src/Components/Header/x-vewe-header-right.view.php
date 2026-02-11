<?php

use Vewe\Ui\Theme\Base\HeaderBaseTheme;

/** Props Definitions
 * The first value is the default, the options are natsorted
 * @var string $toggleSide { 'right' }
 * @var bool $toggle { true || false }
 * @var string $elementToToggle ( '' )
 */
?>
<div :class="HeaderBaseTheme::make(slot: 'right')">

    <x-slot />

    <x-vewe-header-menu-toggle
        :if="($toggleSide ?? 'right') == 'right'"
        :elementToToggle="$elementToToggle ?? ''"
    />

</div>
