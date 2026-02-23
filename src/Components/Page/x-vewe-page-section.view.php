<?php

declare(strict_types=1);

use Vewe\Ui\Theme\Base\PageSectionBaseTheme;

?>

<div :class="PageSectionBaseTheme::make(slot: 'root')">

    <div data-type="container" :class="PageSectionBaseTheme::make(slot: 'container')">
        <div :class="PageSectionBaseTheme::make(slot: 'wrapper')">
            <div :class="PageSectionBaseTheme::make(slot: 'header')">
                Header
            </div>
        </div>
    </div>
</div>
