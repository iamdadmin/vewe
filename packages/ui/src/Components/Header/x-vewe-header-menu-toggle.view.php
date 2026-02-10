<?php

use Vewe\Ui\Theme\Base\HeaderBaseTheme;

?>
<x-vewe-button
    color="neutral"
    variant="ghost"
    icon="lucide:menu"
    :class="HeaderBaseTheme::make(
        props: [
            'toggleSide' => $toggleSide ?? 'right',
            'color' => 'neutral',
            'variant' => 'ghost'
        ],
        slot: toggle)"
/>
