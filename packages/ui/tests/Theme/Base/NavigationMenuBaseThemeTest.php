<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\NavigationMenuBaseTheme;

final class NavigationMenuBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex gap-1.5 [&>div]:min-w-0",
            NavigationMenuBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "isolate min-w-0",
            NavigationMenuBaseTheme::make(slot: 'list'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex items-center gap-1.5 font-semibold text-xs/5 text-highlighted px-2.5 py-1.5",
            NavigationMenuBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0",
            NavigationMenuBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(slot: 'link'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            NavigationMenuBaseTheme::make(slot: 'linkLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            NavigationMenuBaseTheme::make(slot: 'linkLeadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            NavigationMenuBaseTheme::make(slot: 'linkLeadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group ms-auto inline-flex gap-1.5 items-center",
            NavigationMenuBaseTheme::make(slot: 'linkTrailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            NavigationMenuBaseTheme::make(slot: 'linkTrailingBadge'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "sm",
            NavigationMenuBaseTheme::make(slot: 'linkTrailingBadgeSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 transform shrink-0 group-data-[state=open]:rotate-180 transition-transform duration-200",
            NavigationMenuBaseTheme::make(slot: 'linkTrailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            NavigationMenuBaseTheme::make(slot: 'linkLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-block size-3 align-top text-dimmed",
            NavigationMenuBaseTheme::make(slot: 'linkLabelExternalIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "isolate",
            NavigationMenuBaseTheme::make(slot: 'childList'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-xs text-highlighted",
            NavigationMenuBaseTheme::make(slot: 'childLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            NavigationMenuBaseTheme::make(slot: 'childItem'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative size-full flex items-start text-start text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(slot: 'childLink'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0",
            NavigationMenuBaseTheme::make(slot: 'childLinkWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0",
            NavigationMenuBaseTheme::make(slot: 'childLinkIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            NavigationMenuBaseTheme::make(slot: 'childLinkLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-block size-3 align-top text-dimmed",
            NavigationMenuBaseTheme::make(slot: 'childLinkLabelExternalIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted",
            NavigationMenuBaseTheme::make(slot: 'childLinkDescription'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "px-2 h-px bg-border",
            NavigationMenuBaseTheme::make(slot: 'separator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute top-full left-0 flex w-full",
            NavigationMenuBaseTheme::make(slot: 'viewportWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden bg-default shadow-lg rounded-md ring ring-default h-(--reka-navigation-menu-viewport-height) w-full transition-[width,height,left] duration-200 origin-[top_center] data-[state=open]:animate-[scale-in_100ms_ease-out] data-[state=closed]:animate-[scale-out_100ms_ease-in] z-[1]",
            NavigationMenuBaseTheme::make(slot: 'viewport'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            NavigationMenuBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute data-[state=visible]:animate-[fade-in_100ms_ease-out] data-[state=hidden]:animate-[fade-out_100ms_ease-in] data-[state=hidden]:opacity-0 bottom-0 z-[2] w-(--reka-navigation-menu-indicator-size) translate-x-(--reka-navigation-menu-indicator-position) flex h-2.5 items-end justify-center overflow-hidden transition-[translate,width] duration-200",
            NavigationMenuBaseTheme::make(slot: 'indicator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative top-[50%] size-2.5 rotate-45 border border-default bg-default z-[1] rounded-xs",
            NavigationMenuBaseTheme::make(slot: 'arrow'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['color' => 'primary'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-secondary",
            NavigationMenuBaseTheme::make(props: ['color' => 'secondary'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative size-full flex items-start text-start text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['color' => 'primary'], slot: 'childLink'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative size-full flex items-start text-start text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-secondary",
            NavigationMenuBaseTheme::make(props: ['color' => 'secondary'], slot: 'childLink'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-inverted",
            NavigationMenuBaseTheme::make(props: ['color' => 'neutral'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative size-full flex items-start text-start text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-inverted",
            NavigationMenuBaseTheme::make(props: ['color' => 'neutral'], slot: 'childLink'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            NavigationMenuBaseTheme::make(props: ['highlightColor' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            NavigationMenuBaseTheme::make(props: ['highlightColor' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            NavigationMenuBaseTheme::make(props: ['variant' => 'pill'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            NavigationMenuBaseTheme::make(props: ['variant' => 'link'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex gap-1.5 [&>div]:min-w-0 items-center justify-between",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "isolate min-w-0 flex items-center",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'list'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-0 py-2",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-2.5 py-1.5 before:inset-x-px before:inset-y-0 focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "isolate grid p-2",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'childList'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative size-full flex items-start text-start text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-3 py-2 gap-2 before:inset-x-px before:inset-y-0 focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'childLink'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "truncate font-medium",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'childLinkLabel'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute top-0 left-0 w-full max-h-[70vh] overflow-y-auto",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex gap-1.5 [&>div]:min-w-0 flex-col",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 flex-row px-2.5 py-1.5 before:inset-y-px before:inset-x-0 focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-xs text-highlighted px-1.5 py-0.5",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'childLabel'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative size-full flex items-start text-start text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 p-1.5 gap-1.5 before:inset-y-px before:inset-x-0 focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'childLink'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute top-full left-0 flex w-full justify-center",
            NavigationMenuBaseTheme::make(props: ['contentOrientation' => 'horizontal'], slot: 'viewportWrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "data-[motion=from-start]:animate-[enter-from-left_200ms_ease] data-[motion=from-end]:animate-[enter-from-right_200ms_ease] data-[motion=to-start]:animate-[exit-to-left_200ms_ease] data-[motion=to-end]:animate-[exit-to-right_200ms_ease]",
            NavigationMenuBaseTheme::make(props: ['contentOrientation' => 'horizontal'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden bg-default shadow-lg rounded-md ring ring-default h-(--reka-navigation-menu-viewport-height) w-full transition-[width,height,left] duration-200 origin-[top_center] data-[state=open]:animate-[scale-in_100ms_ease-out] data-[state=closed]:animate-[scale-out_100ms_ease-in] z-[1] sm:w-(--reka-navigation-menu-viewport-width) left-(--reka-navigation-menu-viewport-left)",
            NavigationMenuBaseTheme::make(props: ['contentOrientation' => 'vertical'], slot: 'viewport'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative size-full flex items-start text-start text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 before:bg-elevated text-highlighted focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['active' => 'true'], slot: 'childLink'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0 text-default",
            NavigationMenuBaseTheme::make(props: ['active' => 'true'], slot: 'childLinkIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 text-muted focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['active' => 'false'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 text-dimmed",
            NavigationMenuBaseTheme::make(props: ['active' => 'false'], slot: 'linkLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative size-full flex items-start text-start text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 hover:before:bg-elevated/50 text-default hover:text-highlighted transition-colors before:transition-colors focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['active' => 'false'], slot: 'childLink'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0 text-dimmed group-hover:text-default transition-colors",
            NavigationMenuBaseTheme::make(props: ['active' => 'false'], slot: 'childLinkIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 cursor-not-allowed opacity-75 focus-visible:before:ring-primary",
            NavigationMenuBaseTheme::make(props: ['disabled' => 'true'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            NavigationMenuBaseTheme::make(props: ['highlight' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            NavigationMenuBaseTheme::make(props: ['level' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            NavigationMenuBaseTheme::make(props: ['collapsed' => 'true'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'isolate grid p-2 grid-cols-2 gap-2',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal', 'contentOrientation' => 'horizontal'], slot: 'childList'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'isolate grid p-2 gap-1',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal', 'contentOrientation' => 'vertical'], slot: 'childList'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute top-0 left-0 w-full max-h-[70vh] overflow-y-auto w-60',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal', 'contentOrientation' => 'vertical'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'isolate ms-5 border-s border-default',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical', 'collapsed' => false], slot: 'childList'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'ps-1.5 -ms-px',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical', 'collapsed' => false], slot: 'childItem'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'data-[state=open]:animate-[collapsible-down_200ms_ease-out] data-[state=closed]:animate-[collapsible-up_200ms_ease-out] overflow-hidden',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical', 'collapsed' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 flex-row px-2.5 py-1.5 before:inset-y-px before:inset-x-0 focus-visible:before:ring-primary px-1.5',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical', 'collapsed' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'truncate hidden',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical', 'collapsed' => true], slot: 'linkLabel'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group ms-auto inline-flex gap-1.5 items-center hidden',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical', 'collapsed' => true], slot: 'linkTrailing'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shadow-sm rounded-sm min-h-6 p-1',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical', 'collapsed' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-2.5 py-1.5 before:inset-x-px before:inset-y-0 focus-visible:before:ring-primary after:absolute after:-bottom-2 after:inset-x-2.5 after:block after:h-px after:rounded-full after:transition-colors',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'horizontal', 'highlight' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 flex-row px-2.5 py-1.5 before:inset-y-px before:inset-x-0 focus-visible:before:ring-primary after:absolute after:-start-1.5 after:inset-y-0.5 after:block after:w-px after:rounded-full after:transition-colors',
            NavigationMenuBaseTheme::make(props: ['orientation' => 'vertical', 'highlight' => true, 'level' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary hover:text-highlighted hover:before:bg-elevated/50 transition-colors before:transition-colors',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'active' => false, 'variant' => 'pill'], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 group-hover:text-default transition-colors',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'active' => false, 'variant' => 'pill'], slot: 'linkLeadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-2.5 py-1.5 before:inset-x-px before:inset-y-0 focus-visible:before:ring-primary hover:text-highlighted hover:before:bg-elevated/50 transition-colors before:transition-colors data-[state=open]:text-highlighted',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'active' => false, 'variant' => 'pill', 'orientation' => 'horizontal'], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 group-hover:text-default transition-colors group-data-[state=open]:text-default',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'active' => false, 'variant' => 'pill', 'orientation' => 'horizontal'], slot: 'linkLeadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-2.5 py-1.5 before:inset-x-px before:inset-y-0 focus-visible:before:ring-primary after:absolute after:-bottom-2 after:inset-x-2.5 after:block after:h-px after:rounded-full after:transition-colors data-[state=open]:before:bg-elevated/50',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'variant' => 'pill', 'highlight' => true, 'orientation' => 'horizontal'], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-2.5 py-1.5 before:inset-x-px before:inset-y-0 focus-visible:before:ring-primary hover:text-highlighted hover:before:bg-elevated/50 transition-colors before:transition-colors data-[state=open]:text-highlighted data-[state=open]:before:bg-elevated/50',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'variant' => 'pill', 'highlight' => false, 'active' => false, 'orientation' => 'horizontal'], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary text-primary',
            NavigationMenuBaseTheme::make(props: ['color' => 'primary', 'variant' => 'pill', 'active' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 text-primary group-data-[state=open]:text-primary',
            NavigationMenuBaseTheme::make(props: ['color' => 'primary', 'variant' => 'pill', 'active' => true], slot: 'linkLeadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-inverted text-highlighted',
            NavigationMenuBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'pill', 'active' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 text-highlighted group-data-[state=open]:text-highlighted',
            NavigationMenuBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'pill', 'active' => true], slot: 'linkLeadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary text-primary before:bg-elevated',
            NavigationMenuBaseTheme::make(props: ['variant' => 'pill', 'active' => true, 'highlight' => false], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary text-primary hover:before:bg-elevated/50 before:transition-colors',
            NavigationMenuBaseTheme::make(props: ['variant' => 'pill', 'active' => true, 'highlight' => true, 'disabled' => false], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary hover:text-highlighted transition-colors',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'active' => false, 'variant' => 'link'], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 group-hover:text-default transition-colors',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'active' => false, 'variant' => 'link'], slot: 'linkLeadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-2.5 py-1.5 before:inset-x-px before:inset-y-0 focus-visible:before:ring-primary hover:text-highlighted transition-colors data-[state=open]:text-highlighted',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'active' => false, 'variant' => 'link', 'orientation' => 'horizontal'], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 group-hover:text-default transition-colors group-data-[state=open]:text-default',
            NavigationMenuBaseTheme::make(props: ['disabled' => false, 'active' => false, 'variant' => 'link', 'orientation' => 'horizontal'], slot: 'linkLeadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary text-primary',
            NavigationMenuBaseTheme::make(props: ['color' => 'primary', 'variant' => 'link', 'active' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 text-primary group-data-[state=open]:text-primary',
            NavigationMenuBaseTheme::make(props: ['color' => 'primary', 'variant' => 'link', 'active' => true], slot: 'linkLeadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-inverted text-highlighted',
            NavigationMenuBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'link', 'active' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 size-5 text-highlighted group-data-[state=open]:text-highlighted',
            NavigationMenuBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'link', 'active' => true], slot: 'linkLeadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary text-primary after:bg-primary',
            NavigationMenuBaseTheme::make(props: ['highlightColor' => 'primary', 'highlight' => true, 'level' => true, 'active' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative w-full flex items-center gap-1.5 font-medium text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none dark:focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary text-primary after:bg-inverted',
            NavigationMenuBaseTheme::make(props: ['highlightColor' => 'neutral', 'highlight' => true, 'level' => true, 'active' => true], slot: 'link'),
        );
    }

}
