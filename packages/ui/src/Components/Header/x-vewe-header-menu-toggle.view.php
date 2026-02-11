<?php

use Vewe\Ui\Theme\Base\HeaderBaseTheme;

?>
<x-vewe-button
    color="neutral"
    variant="ghost"
    leadingIcon="lucide:menu"
    toggleIcon="lucide:x"
    :toggle="$elementToToggle ?? ''"
    to=""
    label=""
    :classNames="HeaderBaseTheme::make(
        props: [
            'toggleSide' => $toggleSide ?? 'right',
        ],
        slot: 'toggle')"
/>
