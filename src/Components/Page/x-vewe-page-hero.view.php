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

    <div :class="PageHeroBaseTheme::make(slot: 'container')"
        :title="$title ?? ''"
        :description="$description ?? ''">
        <div :isset="$slots['header'] || $slots['headline'] || $headline || $slots['title'] || $title || $slots['description'] || $description || $links" :class="PageHeroBaseTheme::make(slot: 'wrapper')">
            <div :isset="$headline || $title || $description" :class="PageHeroBaseTheme::make(slot: 'header')">
                <div name="header">
                    <div :isset="$headline || $slots['headline']" :class="PageHeroBaseTheme::make(slot: 'headline')">
                        <x-slot name="headline">{{ $headline ?? '' }}</x-slot>
                    </div>
                    <h1 :isset="$title || $slots['title']" :class="PageHeroBaseTheme::make(slot: 'title')">
                        <x-slot name="title">{{ $title ?? '' }}</x-slot>
                    </h1>
                    <div :isset="$description || $slots['description']" :class="PageHeroBaseTheme::make(slot: 'description')">
                        <x-slot name="description">{{ $description ?? '' }}</x-slot>
                    </div>
                </div>
            </div>

            <div :class="PageHeroBaseTheme::make(slot: 'body')">
                <x-slot name="body" />
            </div>

            <div :isset="$links" :class="PageHeroBaseTheme::make(slot: 'footer')">
                <div name="footer">
                    <div :isset="$links" :class="PageHeroBaseTheme::make(slot: 'links')" >
                        <x-slot name="links">
                            <x-template :foreach="$links as $link">
                                <x-vewe-button :to="$link['to']" size="xl" />
                            </x-template>
                        </x-slot>
                    </div>
                </div>
            </div>
        </div>
        <x-slot />
        <div :if="(!isset($slots['default'])) && (($orientation ?? 'vertical') == 'horizontal')" class="hidden lg:block" />
    </div>

    <x-slot name="bottom" />
</div>
