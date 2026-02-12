<?php

declare(strict_types=1);

/**
 * @var string $headline { '' }
 * @var string $title { '' }
 * @var string $description { '' }
 */

lw($attributes);

?>

<div :isset="$headline" :class="PageHeroBaseTheme::make(slot: 'headline')">
    <x-slot name="headline">{{ $headline ?? '' }}</x-slot>
</div>

<h1 :isset="$title" :class="PageHeroBaseTheme::make(slot: 'title')">
    <x-slot name="title">{{ $title ?? '' }}</x-slot>
</h1>

<div :isset="$description" :class="PageHeroBaseTheme::make(slot: 'description')">
    <x-slot name="description">{{ $description ?? '' }}</x-slot>
</div>
