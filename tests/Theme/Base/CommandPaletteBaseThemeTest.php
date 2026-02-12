<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\CommandPaletteBaseTheme;

final class CommandPaletteBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col min-h-0 min-w-0 divide-y divide-default",
            CommandPaletteBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:h-12",
            CommandPaletteBaseTheme::make(slot: 'input'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            CommandPaletteBaseTheme::make(slot: 'close'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-0",
            CommandPaletteBaseTheme::make(slot: 'back'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden flex flex-col",
            CommandPaletteBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-1",
            CommandPaletteBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative scroll-py-1 overflow-y-auto flex-1 focus:outline-none",
            CommandPaletteBaseTheme::make(slot: 'viewport'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-1 isolate",
            CommandPaletteBaseTheme::make(slot: 'group'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted py-6 text-sm",
            CommandPaletteBaseTheme::make(slot: 'empty'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1.5 text-xs gap-1.5",
            CommandPaletteBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1.5 text-sm gap-1.5",
            CommandPaletteBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            CommandPaletteBaseTheme::make(slot: 'itemLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            CommandPaletteBaseTheme::make(slot: 'itemLeadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            CommandPaletteBaseTheme::make(slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            CommandPaletteBaseTheme::make(slot: 'itemLeadingChip'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "md",
            CommandPaletteBaseTheme::make(slot: 'itemLeadingChipSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex items-center gap-1.5",
            CommandPaletteBaseTheme::make(slot: 'itemTrailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            CommandPaletteBaseTheme::make(slot: 'itemTrailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed hidden group-data-highlighted:inline-flex size-5",
            CommandPaletteBaseTheme::make(slot: 'itemTrailingHighlightedIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            CommandPaletteBaseTheme::make(slot: 'itemTrailingKbds'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "md",
            CommandPaletteBaseTheme::make(slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 flex flex-col text-start min-w-0",
            CommandPaletteBaseTheme::make(slot: 'itemWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate space-x-1 text-dimmed",
            CommandPaletteBaseTheme::make(slot: 'itemLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-muted",
            CommandPaletteBaseTheme::make(slot: 'itemDescription'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted [&>mark]:text-inverted [&>mark]:bg-primary",
            CommandPaletteBaseTheme::make(slot: 'itemLabelBase'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-default",
            CommandPaletteBaseTheme::make(slot: 'itemLabelPrefix'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-dimmed [&>mark]:text-inverted [&>mark]:bg-primary",
            CommandPaletteBaseTheme::make(slot: 'itemLabelSuffix'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative scroll-py-1 overflow-y-auto flex-1 focus:outline-none p-1 isolate",
            CommandPaletteBaseTheme::make(props: ['virtualize' => 'true'], slot: 'viewport'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative scroll-py-1 overflow-y-auto flex-1 focus:outline-none divide-y divide-default",
            CommandPaletteBaseTheme::make(props: ['virtualize' => 'false'], slot: 'viewport'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:h-10",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'input'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted py-3 text-xs",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1 text-[10px]/3 gap-1",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1 text-xs gap-1",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex items-center gap-1",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed hidden group-data-highlighted:inline-flex size-4",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailingHighlightedIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm",
            CommandPaletteBaseTheme::make(props: ['size' => 'xs'], slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:h-11",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'input'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted py-4 text-xs",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1.5 text-[10px]/3 gap-1.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1.5 text-xs gap-1.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex items-center gap-1.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed hidden group-data-highlighted:inline-flex size-4",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailingHighlightedIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "sm",
            CommandPaletteBaseTheme::make(props: ['size' => 'sm'], slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:h-12",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'input'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted py-6 text-sm",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-1.5 text-xs gap-1.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-1.5 text-sm gap-1.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex items-center gap-1.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed hidden group-data-highlighted:inline-flex size-5",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailingHighlightedIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md",
            CommandPaletteBaseTheme::make(props: ['size' => 'md'], slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:h-13",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'input'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted py-7 text-sm",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-2 text-xs gap-2",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-2 text-sm gap-2",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex items-center gap-2",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed hidden group-data-highlighted:inline-flex size-5",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailingHighlightedIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md",
            CommandPaletteBaseTheme::make(props: ['size' => 'lg'], slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "[&>input]:h-14",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'input'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center text-muted py-8 text-base",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'empty'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-highlighted p-2 text-sm gap-2",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 p-2 text-base gap-2",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "xs",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingChip'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "lg",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'itemLeadingChipSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex items-center gap-2",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed hidden group-data-highlighted:inline-flex size-6",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailingHighlightedIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailingKbds'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "lg",
            CommandPaletteBaseTheme::make(props: ['size' => 'xl'], slot: 'itemTrailingKbdsSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-highlighted before:bg-elevated p-1.5 text-sm gap-1.5",
            CommandPaletteBaseTheme::make(props: ['active' => 'true'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-default size-5",
            CommandPaletteBaseTheme::make(props: ['active' => 'true'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-start select-none outline-none before:absolute before:z-[-1] before:inset-px before:rounded-md data-disabled:cursor-not-allowed data-disabled:opacity-75 text-default data-highlighted:not-data-disabled:text-highlighted data-highlighted:not-data-disabled:before:bg-elevated/50 transition-colors before:transition-colors p-1.5 text-sm gap-1.5",
            CommandPaletteBaseTheme::make(props: ['active' => 'false'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed group-data-highlighted:not-group-data-disabled:text-default transition-colors size-5",
            CommandPaletteBaseTheme::make(props: ['active' => 'false'], slot: 'itemLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 animate-spin size-5",
            CommandPaletteBaseTheme::make(props: ['loading' => 'true'], slot: 'itemLeadingIcon'),
        );
    }

}
