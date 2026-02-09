<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ContextMenuBaseTheme;

final class ContextMenuBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "min-w-32 bg-default shadow-lg rounded-md ring ring-default overflow-hidden data-[state=open]:animate-[scale-in_100ms_ease-out] data-[state=closed]:animate-[scale-out_100ms_ease-in] origin-(--reka-context-menu-content-transform-origin) flex flex-col",
            ContextMenuBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative divide-y divide-default scroll-py-1 overflow-y-auto flex-1",
            ContextMenuBaseTheme::make(slot: 'viewport'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-1 isolate",
            ContextMenuBaseTheme::make(slot: 'group'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex items-center font-semibold text-highlighted p-1.5 text-sm gap-1.5",
            ContextMenuBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "-mx-1 my-1 h-px bg-border",
            ContextMenuBaseTheme::make(slot: 'separator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1.5 text-sm gap-1.5",
            ContextMenuBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            ContextMenuBaseTheme::make(slot: 'itemLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            ContextMenuBaseTheme::make(slot: 'itemLeadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            ContextMenuBaseTheme::make(slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex gap-1.5 items-center",
            ContextMenuBaseTheme::make(slot: 'itemTrailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            ContextMenuBaseTheme::make(slot: 'itemTrailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            ContextMenuBaseTheme::make(slot: 'itemTrailingKbds'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "md",
            ContextMenuBaseTheme::make(slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 flex flex-col text-start min-w-0",
            ContextMenuBaseTheme::make(slot: 'itemWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            ContextMenuBaseTheme::make(slot: 'itemLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-muted",
            ContextMenuBaseTheme::make(slot: 'itemDescription'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-block size-3 align-top text-dimmed",
            ContextMenuBaseTheme::make(slot: 'itemLabelExternalIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            ContextMenuBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            ContextMenuBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            ContextMenuBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-highlighted before:bg-elevated p-1.5 text-sm gap-1.5",
            ContextMenuBaseTheme::make(props: ['active' => 'true'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-default size-5",
            ContextMenuBaseTheme::make(props: ['active' => 'true'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:text-highlighted data-[state=open]:text-highlighted data-highlighted:before:bg-elevated/50 data-[state=open]:before:bg-elevated/50 transition-colors before:transition-colors p-1.5 text-sm gap-1.5",
            ContextMenuBaseTheme::make(props: ['active' => 'false'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:text-default group-data-[state=open]:text-default transition-colors size-5",
            ContextMenuBaseTheme::make(props: ['active' => 'false'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 animate-spin size-5",
            ContextMenuBaseTheme::make(props: ['loading' => 'true'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex items-center font-semibold text-highlighted p-1 text-xs gap-1",
            ContextMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1 text-xs gap-1",
            ContextMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            ContextMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            ContextMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            ContextMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            ContextMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm",
            ContextMenuBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex items-center font-semibold text-highlighted p-1.5 text-xs gap-1.5",
            ContextMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1.5 text-xs gap-1.5",
            ContextMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            ContextMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            ContextMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            ContextMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            ContextMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm",
            ContextMenuBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex items-center font-semibold text-highlighted p-1.5 text-sm gap-1.5",
            ContextMenuBaseTheme::make(props: ['size' => 'md'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1.5 text-sm gap-1.5",
            ContextMenuBaseTheme::make(props: ['size' => 'md'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            ContextMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            ContextMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            ContextMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            ContextMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md",
            ContextMenuBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex items-center font-semibold text-highlighted p-2 text-sm gap-2",
            ContextMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-2 text-sm gap-2",
            ContextMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            ContextMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            ContextMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            ContextMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-1",
            ContextMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md",
            ContextMenuBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex items-center font-semibold text-highlighted p-2 text-base gap-2",
            ContextMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-2 text-base gap-2",
            ContextMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            ContextMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "xs",
            ContextMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            ContextMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-1",
            ContextMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "lg",
            ContextMenuBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailingKbdsSize'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1.5 text-sm gap-1.5 text-primary data-highlighted:text-primary data-highlighted:before:bg-primary/10 data-[state=open]:before:bg-primary/10',
            ContextMenuBaseTheme::make(props: ['color' => 'primary', 'active' => false], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 text-primary/75 group-data-highlighted:text-primary group-data-[state=open]:text-primary',
            ContextMenuBaseTheme::make(props: ['color' => 'primary', 'active' => false], slot: 'itemLeadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1.5 text-sm gap-1.5 text-primary before:bg-primary/10',
            ContextMenuBaseTheme::make(props: ['color' => 'primary', 'active' => true], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 text-primary',
            ContextMenuBaseTheme::make(props: ['color' => 'primary', 'active' => true], slot: 'itemLeadingIcon'),
        );
    }

}
