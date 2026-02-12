<?php

declare(strict_types=1);

use Vewe\Ui\Theme\Base\PageHeroBaseTheme;

/**
 * @var string $headline { '' }
 * @var string $title { '' }
 * @var string $description { '' }
 * @var array $links { [] }
 * @var string $classNames { '' }
 * @var string $orientation { vertical || horizontal }
 */

?>

<div :class="PageHeroBaseTheme::make(slot: 'root', props: ['class' => $classNames ?? ''])">
    <x-slot name="top" />

    <x-vewe-container :class="PageHeroBaseTheme::make(slot: 'container')"
        :title="$title ?? ''"
        :description="$description ?? ''">

        <div :isset="$slots['header'] || $slots['headline'] || $headline || $slots['title'] || $title || $slots['description'] || $description || $links" :class="PageHeroBaseTheme::make(slot: 'wrapper')">
            
            <div :isset="$headline || $title || $description" :class="PageHeroBaseTheme::make(slot: 'header')">
                <x-vewe-page-hero-header
                    :headline="$headline ?? ''"
                    :title="$title ?? ''"
                    :description="$description ?? ''">
                </x-vewe-page-hero-header>
            </div>

            <div :class="PageHeroBaseTheme::make(slot: 'body')">
                <x-slot name="body" />
            </div>

            <div :isset="$links" :class="PageHeroBaseTheme::make(slot: 'footer')">
                <x-slot name="footer">
                    <div :isset="$links" :class="PageHeroBaseTheme::make(slot: 'links')" >
                        <x-slot name="links" />
                    </div>
                </x-slot>
            </div>
        </div>
        <x-slot />
        <div :if="($orientation ?? 'vertical') == 'horizontal'" class="hidden lg:block" />

    </x-vewe-container>

    <x-slot name="bottom" />
</div>
