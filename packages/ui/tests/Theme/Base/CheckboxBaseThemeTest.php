<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\CheckboxBaseTheme;

final class CheckboxBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start flex-row",
            CheckboxBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-5",
            CheckboxBaseTheme::make(slot: 'container'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-4 focus-visible:outline-primary",
            CheckboxBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-4 focus-visible:outline-primary",
            CheckboxBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full text-inverted bg-primary",
            CheckboxBaseTheme::make(slot: 'indicator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-full",
            CheckboxBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full text-sm ms-2",
            CheckboxBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default",
            CheckboxBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted",
            CheckboxBaseTheme::make(slot: 'description'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary size-4",
            CheckboxBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary size-4",
            CheckboxBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full text-inverted bg-primary",
            CheckboxBaseTheme::make(props: ['color' => 'primary'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full text-inverted bg-secondary",
            CheckboxBaseTheme::make(props: ['color' => 'secondary'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-inverted size-4",
            CheckboxBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full text-inverted bg-inverted",
            CheckboxBaseTheme::make(props: ['color' => 'neutral'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start flex-row",
            CheckboxBaseTheme::make(props: ['variant' => 'list'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start border border-muted rounded-lg flex-row p-3.5 has-data-[state=checked]:border-primary",
            CheckboxBaseTheme::make(props: ['variant' => 'card'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start flex-row",
            CheckboxBaseTheme::make(props: ['indicator' => 'start'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full ms-2 text-sm",
            CheckboxBaseTheme::make(props: ['indicator' => 'start'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start flex-row-reverse",
            CheckboxBaseTheme::make(props: ['indicator' => 'end'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full me-2 text-sm",
            CheckboxBaseTheme::make(props: ['indicator' => 'end'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 sr-only size-4 focus-visible:outline-primary",
            CheckboxBaseTheme::make(props: ['indicator' => 'hidden'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full text-center text-sm",
            CheckboxBaseTheme::make(props: ['indicator' => 'hidden'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-3 focus-visible:outline-primary",
            CheckboxBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-4",
            CheckboxBaseTheme::make(props: ['size' => 'xs'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full text-xs ms-2",
            CheckboxBaseTheme::make(props: ['size' => 'xs'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-3.5 focus-visible:outline-primary",
            CheckboxBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-4",
            CheckboxBaseTheme::make(props: ['size' => 'sm'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full text-xs ms-2",
            CheckboxBaseTheme::make(props: ['size' => 'sm'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-4 focus-visible:outline-primary",
            CheckboxBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-5",
            CheckboxBaseTheme::make(props: ['size' => 'md'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full text-sm ms-2",
            CheckboxBaseTheme::make(props: ['size' => 'md'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-4.5 focus-visible:outline-primary",
            CheckboxBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-5",
            CheckboxBaseTheme::make(props: ['size' => 'lg'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full text-sm ms-2",
            CheckboxBaseTheme::make(props: ['size' => 'lg'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-5 focus-visible:outline-primary",
            CheckboxBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-6",
            CheckboxBaseTheme::make(props: ['size' => 'xl'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full text-base ms-2",
            CheckboxBaseTheme::make(props: ['size' => 'xl'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default after:content-['*'] after:ms-0.5 after:text-error",
            CheckboxBaseTheme::make(props: ['required' => 'true'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start opacity-75 flex-row",
            CheckboxBaseTheme::make(props: ['disabled' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 cursor-not-allowed size-4 focus-visible:outline-primary",
            CheckboxBaseTheme::make(props: ['disabled' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default cursor-not-allowed",
            CheckboxBaseTheme::make(props: ['disabled' => 'true'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted cursor-not-allowed",
            CheckboxBaseTheme::make(props: ['disabled' => 'true'], slot: 'description'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex items-start border border-muted rounded-lg flex-row p-2.5 has-data-[state=checked]:border-primary',
            CheckboxBaseTheme::make(props: ['size' => 'xs', 'variant' => 'card'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex items-start border border-muted rounded-lg flex-row p-3 has-data-[state=checked]:border-primary',
            CheckboxBaseTheme::make(props: ['size' => 'sm', 'variant' => 'card'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex items-start border border-muted rounded-lg flex-row p-3.5 has-data-[state=checked]:border-primary',
            CheckboxBaseTheme::make(props: ['size' => 'md', 'variant' => 'card'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex items-start border border-muted rounded-lg flex-row p-4 has-data-[state=checked]:border-primary',
            CheckboxBaseTheme::make(props: ['size' => 'lg', 'variant' => 'card'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex items-start border border-muted rounded-lg flex-row p-4.5 has-data-[state=checked]:border-primary',
            CheckboxBaseTheme::make(props: ['size' => 'xl', 'variant' => 'card'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex items-start border border-muted rounded-lg flex-row p-3.5 has-data-[state=checked]:border-primary',
            CheckboxBaseTheme::make(props: ['color' => 'primary', 'variant' => 'card'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex items-start border border-muted rounded-lg flex-row p-3.5 has-data-[state=checked]:border-inverted',
            CheckboxBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'card'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex items-start border border-muted rounded-lg flex-row p-3.5 has-data-[state=checked]:border-primary cursor-not-allowed',
            CheckboxBaseTheme::make(props: ['variant' => 'card', 'disabled' => true], slot: 'root'),
        );
    }

}
