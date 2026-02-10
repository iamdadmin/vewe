<?php

declare(strict_types=1);

use Vewe\Ui\Theme\Base\ContainerBaseTheme;

?>
<div :class="ContainerBaseTheme::make(props: ['class' => $class ?? ''], slot: 'base')">
    <x-slot />
</div>
