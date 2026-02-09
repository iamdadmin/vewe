<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\SwitchBaseTheme;

final class SwitchBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start",
            SwitchBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 data-[state=checked]:bg-primary focus-visible:outline-primary w-9",
            SwitchBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 data-[state=checked]:bg-primary focus-visible:outline-primary w-9",
            SwitchBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-5",
            SwitchBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group pointer-events-none rounded-full bg-default shadow-lg ring-0 transition-transform duration-200 data-[state=unchecked]:translate-x-0 data-[state=unchecked]:rtl:-translate-x-0 flex items-center justify-center size-4 data-[state=checked]:translate-x-4 data-[state=checked]:rtl:-translate-x-4",
            SwitchBaseTheme::make(slot: 'thumb'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute shrink-0 group-data-[state=unchecked]:text-dimmed opacity-0 size-10/12 transition-[color,opacity] duration-200 group-data-[state=checked]:text-primary",
            SwitchBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ms-2 text-sm",
            SwitchBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default",
            SwitchBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted",
            SwitchBaseTheme::make(slot: 'description'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 data-[state=checked]:bg-primary focus-visible:outline-primary w-9",
            SwitchBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 data-[state=checked]:bg-secondary focus-visible:outline-secondary w-9",
            SwitchBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute shrink-0 group-data-[state=unchecked]:text-dimmed opacity-0 size-10/12 transition-[color,opacity] duration-200 group-data-[state=checked]:text-primary",
            SwitchBaseTheme::make(props: ['color' => 'primary'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute shrink-0 group-data-[state=unchecked]:text-dimmed opacity-0 size-10/12 transition-[color,opacity] duration-200 group-data-[state=checked]:text-secondary",
            SwitchBaseTheme::make(props: ['color' => 'secondary'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 data-[state=checked]:bg-inverted focus-visible:outline-inverted w-9",
            SwitchBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute shrink-0 group-data-[state=unchecked]:text-dimmed opacity-0 size-10/12 transition-[color,opacity] duration-200 group-data-[state=checked]:text-highlighted",
            SwitchBaseTheme::make(props: ['color' => 'neutral'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 w-7 data-[state=checked]:bg-primary focus-visible:outline-primary",
            SwitchBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-4",
            SwitchBaseTheme::make(props: ['size' => 'xs'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group pointer-events-none rounded-full bg-default shadow-lg ring-0 transition-transform duration-200 data-[state=unchecked]:translate-x-0 data-[state=unchecked]:rtl:-translate-x-0 flex items-center justify-center size-3 data-[state=checked]:translate-x-3 data-[state=checked]:rtl:-translate-x-3",
            SwitchBaseTheme::make(props: ['size' => 'xs'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-2 text-xs",
            SwitchBaseTheme::make(props: ['size' => 'xs'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 w-8 data-[state=checked]:bg-primary focus-visible:outline-primary",
            SwitchBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-4",
            SwitchBaseTheme::make(props: ['size' => 'sm'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group pointer-events-none rounded-full bg-default shadow-lg ring-0 transition-transform duration-200 data-[state=unchecked]:translate-x-0 data-[state=unchecked]:rtl:-translate-x-0 flex items-center justify-center size-3.5 data-[state=checked]:translate-x-3.5 data-[state=checked]:rtl:-translate-x-3.5",
            SwitchBaseTheme::make(props: ['size' => 'sm'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-2 text-xs",
            SwitchBaseTheme::make(props: ['size' => 'sm'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 w-9 data-[state=checked]:bg-primary focus-visible:outline-primary",
            SwitchBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-5",
            SwitchBaseTheme::make(props: ['size' => 'md'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group pointer-events-none rounded-full bg-default shadow-lg ring-0 transition-transform duration-200 data-[state=unchecked]:translate-x-0 data-[state=unchecked]:rtl:-translate-x-0 flex items-center justify-center size-4 data-[state=checked]:translate-x-4 data-[state=checked]:rtl:-translate-x-4",
            SwitchBaseTheme::make(props: ['size' => 'md'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-2 text-sm",
            SwitchBaseTheme::make(props: ['size' => 'md'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 w-10 data-[state=checked]:bg-primary focus-visible:outline-primary",
            SwitchBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-5",
            SwitchBaseTheme::make(props: ['size' => 'lg'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group pointer-events-none rounded-full bg-default shadow-lg ring-0 transition-transform duration-200 data-[state=unchecked]:translate-x-0 data-[state=unchecked]:rtl:-translate-x-0 flex items-center justify-center size-4.5 data-[state=checked]:translate-x-4.5 data-[state=checked]:rtl:-translate-x-4.5",
            SwitchBaseTheme::make(props: ['size' => 'lg'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-2 text-sm",
            SwitchBaseTheme::make(props: ['size' => 'lg'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 w-11 data-[state=checked]:bg-primary focus-visible:outline-primary",
            SwitchBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-6",
            SwitchBaseTheme::make(props: ['size' => 'xl'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group pointer-events-none rounded-full bg-default shadow-lg ring-0 transition-transform duration-200 data-[state=unchecked]:translate-x-0 data-[state=unchecked]:rtl:-translate-x-0 flex items-center justify-center size-5 data-[state=checked]:translate-x-5 data-[state=checked]:rtl:-translate-x-5",
            SwitchBaseTheme::make(props: ['size' => 'xl'], slot: 'thumb'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-2 text-base",
            SwitchBaseTheme::make(props: ['size' => 'xl'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute shrink-0 group-data-[state=unchecked]:text-dimmed opacity-0 size-10/12 transition-[color,opacity] duration-200 group-data-[state=checked]:opacity-100 group-data-[state=checked]:text-primary",
            SwitchBaseTheme::make(props: ['checked' => 'true'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute shrink-0 group-data-[state=unchecked]:text-dimmed opacity-0 size-10/12 transition-[color,opacity] duration-200 group-data-[state=unchecked]:opacity-100 group-data-[state=checked]:text-primary",
            SwitchBaseTheme::make(props: ['unchecked' => 'true'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute shrink-0 group-data-[state=unchecked]:text-dimmed opacity-0 size-10/12 transition-[color,opacity] duration-200 animate-spin group-data-[state=checked]:text-primary",
            SwitchBaseTheme::make(props: ['loading' => 'true'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default after:content-[\"*\"] after:ms-0.5 after:text-error",
            SwitchBaseTheme::make(props: ['required' => 'true'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start opacity-75",
            SwitchBaseTheme::make(props: ['disabled' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center shrink-0 rounded-full border-2 border-transparent focus-visible:outline-2 focus-visible:outline-offset-2 data-[state=unchecked]:bg-accented transition-[background] duration-200 cursor-not-allowed data-[state=checked]:bg-primary focus-visible:outline-primary w-9",
            SwitchBaseTheme::make(props: ['disabled' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default cursor-not-allowed",
            SwitchBaseTheme::make(props: ['disabled' => 'true'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted cursor-not-allowed",
            SwitchBaseTheme::make(props: ['disabled' => 'true'], slot: 'description'),
        );
    }

}
