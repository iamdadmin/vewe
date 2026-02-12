<?php

declare(strict_types=1);

use Vewe\Ui\Theme\Base\PageHeroBaseTheme;

/**
 * @var array $links { [] }
 */
?>
<x-slot>
    <x-template :foreach="$links as $link">
        <x-vewe-button :to="$link['to']" size="xl" />
    </x-template>
</x-slot>
