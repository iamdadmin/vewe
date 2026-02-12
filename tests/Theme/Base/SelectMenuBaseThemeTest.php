<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\SelectMenuBaseTheme;

final class SelectMenuBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'leadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'leadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'trailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'trailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate pointer-events-none text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'value'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-dimmed text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'placeholder'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fill-default text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'arrow'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "max-h-60 w-(--reka-select-trigger-width) bg-default shadow-lg rounded-md ring ring-default overflow-hidden data-[state=open]:animate-[scale-in_100ms_ease-out] data-[state=closed]:animate-[scale-out_100ms_ease-in] origin-(--reka-select-content-transform-origin) pointer-events-auto flex flex-col origin-(--reka-combobox-content-transform-origin) w-(--reka-combobox-trigger-width) text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative scroll-py-1 overflow-y-auto flex-1 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'viewport'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-1 isolate text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'group'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-1.5 text-sm text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'empty'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1.5 text-xs gap-1.5 bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "-mx-1 my-1 h-px bg-border text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'separator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemLeadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xs text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemLeadingChip'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "md text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemLeadingChipSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex gap-1.5 items-center text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemTrailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemTrailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 flex flex-col min-w-0 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-muted text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'itemDescription'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "border-b border-default text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'input'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col min-h-0 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'focusScope'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-0 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(slot: 'trailingClear'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors not-only:first:rounded-e-none not-only:last:rounded-s-none not-last:not-first:rounded-none focus-visible:z-[1] text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors not-only:first:rounded-b-none not-only:last:rounded-t-none not-last:not-first:rounded-none focus-visible:z-[1] text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1 text-[10px]/3 gap-1 bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-1 text-xs gap-1 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-4 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-1 text-xs text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1.5 text-[10px]/3 gap-1.5 bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-1.5 text-xs gap-1.5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-4 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-1.5 text-xs text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1.5 text-xs gap-1.5 bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'md'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'md'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-1.5 text-sm text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'md'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-2 text-xs gap-2 bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-2 text-sm gap-2 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-2 text-sm text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-2 text-sm gap-2 bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-2 text-base gap-2 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-6 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "xs text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "lg text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6 text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-2 text-base text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted",
            SelectMenuBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(props: ['leading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(props: ['trailing' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(props: ['loading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(props: ['highlight' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors file:me-1.5 file:font-medium file:text-muted file:outline-none text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            SelectMenuBaseTheme::make(props: ['type' => 'file'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative scroll-py-1 overflow-y-auto flex-1 p-1 isolate text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['virtualize' => 'true'], slot: 'viewport'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative scroll-py-1 overflow-y-auto flex-1 divide-y divide-default text-highlighted bg-default ring ring-inset ring-accented",
            SelectMenuBaseTheme::make(props: ['virtualize' => 'false'], slot: 'viewport'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            SelectMenuBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-elevated ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            SelectMenuBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ring-primary',
            SelectMenuBaseTheme::make(props: ['color' => 'primary', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            SelectMenuBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-elevated ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            SelectMenuBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted ring-inverted',
            SelectMenuBaseTheme::make(props: ['color' => 'neutral', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-7',
            SelectMenuBaseTheme::make(props: ['leading' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-8',
            SelectMenuBaseTheme::make(props: ['leading' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-9',
            SelectMenuBaseTheme::make(props: ['leading' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-10',
            SelectMenuBaseTheme::make(props: ['leading' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-11',
            SelectMenuBaseTheme::make(props: ['leading' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-7',
            SelectMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-8',
            SelectMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-9',
            SelectMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-10',
            SelectMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group rounded-md inline-flex items-center focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-11',
            SelectMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            SelectMenuBaseTheme::make(props: ['loading' => true, 'leading' => true], slot: 'leadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            SelectMenuBaseTheme::make(props: ['loading' => true, 'leading' => false, 'trailing' => true], slot: 'trailingIcon'),
        );
    }

}
