<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\TabsBaseTheme;

final class TabsBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-2",
            TabsBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex p-1 group bg-elevated rounded-lg",
            TabsBaseTheme::make(slot: 'list'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute transition-[translate,width] duration-200 rounded-md shadow-xs bg-primary",
            TabsBaseTheme::make(slot: 'indicator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors grow px-3 py-1.5 text-sm gap-1.5 data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary",
            TabsBaseTheme::make(slot: 'trigger'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            TabsBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            TabsBaseTheme::make(slot: 'leadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            TabsBaseTheme::make(slot: 'leadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            TabsBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            TabsBaseTheme::make(slot: 'trailingBadge'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "sm",
            TabsBaseTheme::make(slot: 'trailingBadgeSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "focus:outline-none w-full",
            TabsBaseTheme::make(slot: 'content'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TabsBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TabsBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TabsBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex p-1 group bg-elevated rounded-lg",
            TabsBaseTheme::make(props: ['variant' => 'pill'], slot: 'list'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors grow px-3 py-1.5 text-sm gap-1.5 data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary",
            TabsBaseTheme::make(props: ['variant' => 'pill'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute transition-[translate,width] duration-200 rounded-md shadow-xs bg-primary",
            TabsBaseTheme::make(props: ['variant' => 'pill'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex p-1 group border-default",
            TabsBaseTheme::make(props: ['variant' => 'link'], slot: 'list'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute transition-[translate,width] duration-200 rounded-full bg-primary",
            TabsBaseTheme::make(props: ['variant' => 'link'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors focus:outline-none px-3 py-1.5 text-sm gap-1.5 data-[state=active]:text-primary focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            TabsBaseTheme::make(props: ['variant' => 'link'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-2 flex-col",
            TabsBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex p-1 group w-full bg-elevated rounded-lg",
            TabsBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'list'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute transition-[translate,width] duration-200 left-0 w-(--reka-tabs-indicator-size) translate-x-(--reka-tabs-indicator-position) rounded-md shadow-xs inset-y-1 bg-primary",
            TabsBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors justify-center grow px-3 py-1.5 text-sm gap-1.5 data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary",
            TabsBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex p-1 group flex-col bg-elevated rounded-lg items-center",
            TabsBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'list'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute transition-[translate,width] duration-200 top-0 h-(--reka-tabs-indicator-size) translate-y-(--reka-tabs-indicator-position) rounded-md shadow-xs inset-x-1 bg-primary",
            TabsBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2 py-1 text-xs gap-1 grow data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary",
            TabsBaseTheme::make(props: ['size' => 'xs'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            TabsBaseTheme::make(props: ['size' => 'xs'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            TabsBaseTheme::make(props: ['size' => 'xs'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-xs gap-1.5 grow data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary",
            TabsBaseTheme::make(props: ['size' => 'sm'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            TabsBaseTheme::make(props: ['size' => 'sm'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            TabsBaseTheme::make(props: ['size' => 'sm'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-1.5 text-sm gap-1.5 grow data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary",
            TabsBaseTheme::make(props: ['size' => 'md'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            TabsBaseTheme::make(props: ['size' => 'md'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            TabsBaseTheme::make(props: ['size' => 'md'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-sm gap-2 grow data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary",
            TabsBaseTheme::make(props: ['size' => 'lg'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            TabsBaseTheme::make(props: ['size' => 'lg'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            TabsBaseTheme::make(props: ['size' => 'lg'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-base gap-2 grow data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary",
            TabsBaseTheme::make(props: ['size' => 'xl'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            TabsBaseTheme::make(props: ['size' => 'xl'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "xs",
            TabsBaseTheme::make(props: ['size' => 'xl'], slot: 'leadingAvatarSize'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute transition-[translate,width] duration-200 left-0 w-(--reka-tabs-indicator-size) translate-x-(--reka-tabs-indicator-position) rounded-md shadow-xs inset-y-1 bg-primary',
            TabsBaseTheme::make(props: ['orientation' => 'horizontal', 'variant' => 'pill'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex p-1 group w-full border-default border-b -mb-px',
            TabsBaseTheme::make(props: ['orientation' => 'horizontal', 'variant' => 'link'], slot: 'list'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute transition-[translate,width] duration-200 left-0 w-(--reka-tabs-indicator-size) translate-x-(--reka-tabs-indicator-position) rounded-full -bottom-px h-px bg-primary',
            TabsBaseTheme::make(props: ['orientation' => 'horizontal', 'variant' => 'link'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute transition-[translate,width] duration-200 top-0 h-(--reka-tabs-indicator-size) translate-y-(--reka-tabs-indicator-position) rounded-md shadow-xs inset-x-1 bg-primary',
            TabsBaseTheme::make(props: ['orientation' => 'vertical', 'variant' => 'pill'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex p-1 group flex-col bg-elevated rounded-lg items-center',
            TabsBaseTheme::make(props: ['orientation' => 'vertical', 'variant' => 'pill'], slot: 'list'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex p-1 group flex-col border-default border-s -ms-px',
            TabsBaseTheme::make(props: ['orientation' => 'vertical', 'variant' => 'link'], slot: 'list'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute transition-[translate,width] duration-200 top-0 h-(--reka-tabs-indicator-size) translate-y-(--reka-tabs-indicator-position) rounded-full -start-px w-px bg-primary',
            TabsBaseTheme::make(props: ['orientation' => 'vertical', 'variant' => 'link'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute transition-[translate,width] duration-200 rounded-md shadow-xs bg-primary',
            TabsBaseTheme::make(props: ['color' => 'primary', 'variant' => 'pill'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors grow px-3 py-1.5 text-sm gap-1.5 data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary',
            TabsBaseTheme::make(props: ['color' => 'primary', 'variant' => 'pill'], slot: 'trigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute transition-[translate,width] duration-200 rounded-md shadow-xs bg-inverted',
            TabsBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'pill'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors grow px-3 py-1.5 text-sm gap-1.5 data-[state=active]:text-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-inverted',
            TabsBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'pill'], slot: 'trigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute transition-[translate,width] duration-200 rounded-full bg-primary',
            TabsBaseTheme::make(props: ['color' => 'primary', 'variant' => 'link'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors focus:outline-none px-3 py-1.5 text-sm gap-1.5 data-[state=active]:text-primary focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            TabsBaseTheme::make(props: ['color' => 'primary', 'variant' => 'link'], slot: 'trigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute transition-[translate,width] duration-200 rounded-full bg-inverted',
            TabsBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'link'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center min-w-0 data-[state=inactive]:text-muted hover:data-[state=inactive]:not-disabled:text-default font-medium rounded-md disabled:cursor-not-allowed disabled:opacity-75 transition-colors focus:outline-none px-3 py-1.5 text-sm gap-1.5 data-[state=active]:text-highlighted focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            TabsBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'link'], slot: 'trigger'),
        );
    }

}
