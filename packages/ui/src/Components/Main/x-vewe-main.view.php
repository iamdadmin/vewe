<?php

declare(strict_types=1);

use Vewe\Ui\Theme\Base\MainBaseTheme;

?>

<div :class="MainBaseTheme::make(slot: 'base', props: ['class' => $classNames ?? ''])">
    <x-slot />
</div>
