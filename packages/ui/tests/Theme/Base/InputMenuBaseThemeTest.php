<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\InputMenuBaseTheme;

final class InputMenuBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'leadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'leadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group absolute inset-y-0 end-0 flex items-center disabled:cursor-not-allowed disabled:opacity-75 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'trailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'trailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-0 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'trailingClear'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fill-default text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'arrow'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "max-h-60 w-(--reka-combobox-trigger-width) bg-default shadow-lg rounded-md ring ring-default overflow-hidden data-[state=open]:animate-[scale-in_100ms_ease-out] data-[state=closed]:animate-[scale-out_100ms_ease-in] origin-(--reka-combobox-content-transform-origin) pointer-events-auto flex flex-col text-highlighted ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative scroll-py-1 overflow-y-auto flex-1 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'viewport'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-1 isolate text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'group'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-1.5 text-sm text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'empty'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1.5 text-xs gap-1.5 bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "-mx-1 my-1 h-px bg-border text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'separator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start gap-1.5 p-1.5 text-sm select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemLeadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xs text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemLeadingChip'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "md text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemLeadingChipSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex gap-1.5 items-center text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemTrailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemTrailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 flex flex-col min-w-0 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-muted text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'itemDescription'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 text-xs text-highlighted bg-default",
            InputMenuBaseTheme::make(slot: 'tagsItem'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'tagsItemText'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center rounded-xs text-dimmed hover:text-default hover:bg-accented/75 disabled:pointer-events-none transition-colors text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'tagsItemDelete'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'tagsItemDeleteIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 border-0 bg-transparent placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(slot: 'tagsInput'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center group has-focus-visible:z-[1] text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors group-not-only:group-first:rounded-e-none group-not-only:group-last:rounded-s-none group-not-last:group-not-first:rounded-none text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center group has-focus-visible:z-[1] text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors group-not-only:group-first:rounded-b-none group-not-only:group-last:rounded-t-none group-not-last:group-not-first:rounded-none text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1 text-[10px]/3 gap-1 bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start gap-1.5 p-1.5 text-sm select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-1 text-xs gap-1 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 text-[10px]/3 text-highlighted bg-default",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'tagsItem'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'tagsItemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-1 text-xs text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1.5 text-[10px]/3 gap-1.5 bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start gap-1.5 p-1.5 text-sm select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-1.5 text-xs gap-1.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 text-[10px]/3 text-highlighted bg-default",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'tagsItem'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'tagsItemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-1.5 text-xs text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1.5 text-xs gap-1.5 bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start gap-1.5 p-1.5 text-sm select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 text-xs text-highlighted bg-default",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'tagsItem'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'tagsItemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-1.5 text-sm text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'md'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-2 text-xs gap-2 bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start gap-1.5 p-1.5 text-sm select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-2 text-sm gap-2 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 text-xs text-highlighted bg-default",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'tagsItem'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'tagsItemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-2 text-sm text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-2 text-sm gap-2 bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start gap-1.5 p-1.5 text-sm select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-2 text-base gap-2 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-6 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "xs text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "lg text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 text-sm text-highlighted bg-default",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'tagsItem'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'tagsItemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted p-2 text-base text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted",
            InputMenuBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(props: ['leading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(props: ['trailing' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(props: ['loading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(props: ['highlight' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors file:me-1.5 file:font-medium file:text-muted file:outline-none text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(props: ['type' => 'file'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative scroll-py-1 overflow-y-auto flex-1 p-1 isolate text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['virtualize' => 'true'], slot: 'viewport'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative scroll-py-1 overflow-y-auto flex-1 divide-y divide-default text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['virtualize' => 'false'], slot: 'viewport'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center flex-wrap text-highlighted bg-default ring ring-inset ring-accented",
            InputMenuBaseTheme::make(props: ['multiple' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors w-full border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputMenuBaseTheme::make(props: ['multiple' => 'false'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputMenuBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-elevated ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputMenuBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ring-primary',
            InputMenuBaseTheme::make(props: ['color' => 'primary', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputMenuBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-elevated ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputMenuBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted ring-inverted',
            InputMenuBaseTheme::make(props: ['color' => 'neutral', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-7',
            InputMenuBaseTheme::make(props: ['leading' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-8',
            InputMenuBaseTheme::make(props: ['leading' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-9',
            InputMenuBaseTheme::make(props: ['leading' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-10',
            InputMenuBaseTheme::make(props: ['leading' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-11',
            InputMenuBaseTheme::make(props: ['leading' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-7',
            InputMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-8',
            InputMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-9',
            InputMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-10',
            InputMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-11',
            InputMenuBaseTheme::make(props: ['trailing' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            InputMenuBaseTheme::make(props: ['loading' => true, 'leading' => true], slot: 'leadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            InputMenuBaseTheme::make(props: ['loading' => true, 'leading' => false, 'trailing' => true], slot: 'trailingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-elevated/50 hover:bg-elevated focus:bg-elevated disabled:bg-elevated/50 has-focus:bg-elevated',
            InputMenuBaseTheme::make(props: ['variant' => 'soft', 'multiple' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-transparent hover:bg-elevated focus:bg-elevated disabled:bg-transparent dark:disabled:bg-transparent has-focus:bg-elevated',
            InputMenuBaseTheme::make(props: ['variant' => 'ghost', 'multiple' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary has-focus-visible:ring-2 has-focus-visible:ring-primary',
            InputMenuBaseTheme::make(props: ['color' => 'primary', 'multiple' => true, 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-elevated ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary has-focus-visible:ring-2 has-focus-visible:ring-primary',
            InputMenuBaseTheme::make(props: ['color' => 'primary', 'multiple' => true, 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted has-focus-visible:ring-2 has-focus-visible:ring-inverted',
            InputMenuBaseTheme::make(props: ['color' => 'neutral', 'multiple' => true, 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-elevated ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted has-focus-visible:ring-2 has-focus-visible:ring-inverted',
            InputMenuBaseTheme::make(props: ['color' => 'neutral', 'multiple' => true, 'variant' => 'subtle'], slot: 'base'),
        );
    }

}
