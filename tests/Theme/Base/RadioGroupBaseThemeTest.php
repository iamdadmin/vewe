<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\RadioGroupBaseTheme;

final class RadioGroupBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            RadioGroupBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-1 flex-col",
            RadioGroupBaseTheme::make(slot: 'fieldset'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-sm",
            RadioGroupBaseTheme::make(slot: 'legend'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start text-sm flex-row",
            RadioGroupBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-5",
            RadioGroupBaseTheme::make(slot: 'container'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-4 focus-visible:outline-primary",
            RadioGroupBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-4 focus-visible:outline-primary",
            RadioGroupBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full after:bg-default after:rounded-full after:size-1.5 bg-primary",
            RadioGroupBaseTheme::make(slot: 'indicator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full ms-2",
            RadioGroupBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default",
            RadioGroupBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted",
            RadioGroupBaseTheme::make(slot: 'description'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary size-4",
            RadioGroupBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary size-4",
            RadioGroupBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full after:bg-default after:rounded-full bg-primary after:size-1.5",
            RadioGroupBaseTheme::make(props: ['color' => 'primary'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full after:bg-default after:rounded-full bg-secondary after:size-1.5",
            RadioGroupBaseTheme::make(props: ['color' => 'secondary'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-inverted size-4",
            RadioGroupBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full after:bg-default after:rounded-full bg-inverted after:size-1.5",
            RadioGroupBaseTheme::make(props: ['color' => 'neutral'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start text-sm flex-row",
            RadioGroupBaseTheme::make(props: ['variant' => 'list'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start border border-muted rounded-lg text-sm flex-row p-3.5 has-data-[state=checked]:border-primary",
            RadioGroupBaseTheme::make(props: ['variant' => 'card'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start border border-muted text-sm flex-row p-3.5 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]",
            RadioGroupBaseTheme::make(props: ['variant' => 'table'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 flex-row gap-y-1",
            RadioGroupBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 flex-col gap-y-1",
            RadioGroupBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start flex-row text-sm",
            RadioGroupBaseTheme::make(props: ['indicator' => 'start'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full ms-2",
            RadioGroupBaseTheme::make(props: ['indicator' => 'start'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start flex-row-reverse text-sm",
            RadioGroupBaseTheme::make(props: ['indicator' => 'end'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full me-2",
            RadioGroupBaseTheme::make(props: ['indicator' => 'end'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 sr-only size-4 focus-visible:outline-primary",
            RadioGroupBaseTheme::make(props: ['indicator' => 'hidden'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full text-center",
            RadioGroupBaseTheme::make(props: ['indicator' => 'hidden'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-0.5 flex-col",
            RadioGroupBaseTheme::make(props: ['size' => 'xs'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-xs",
            RadioGroupBaseTheme::make(props: ['size' => 'xs'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-3 focus-visible:outline-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start text-xs flex-row",
            RadioGroupBaseTheme::make(props: ['size' => 'xs'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-4",
            RadioGroupBaseTheme::make(props: ['size' => 'xs'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full after:bg-default after:rounded-full after:size-1 bg-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'xs'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-0.5 flex-col",
            RadioGroupBaseTheme::make(props: ['size' => 'sm'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-xs",
            RadioGroupBaseTheme::make(props: ['size' => 'sm'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-3.5 focus-visible:outline-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start text-xs flex-row",
            RadioGroupBaseTheme::make(props: ['size' => 'sm'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-4",
            RadioGroupBaseTheme::make(props: ['size' => 'sm'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full after:bg-default after:rounded-full after:size-1 bg-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'sm'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-1 flex-col",
            RadioGroupBaseTheme::make(props: ['size' => 'md'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-sm",
            RadioGroupBaseTheme::make(props: ['size' => 'md'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-4 focus-visible:outline-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start text-sm flex-row",
            RadioGroupBaseTheme::make(props: ['size' => 'md'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-5",
            RadioGroupBaseTheme::make(props: ['size' => 'md'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full after:bg-default after:rounded-full after:size-1.5 bg-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'md'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-1 flex-col",
            RadioGroupBaseTheme::make(props: ['size' => 'lg'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-sm",
            RadioGroupBaseTheme::make(props: ['size' => 'lg'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-4.5 focus-visible:outline-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start text-sm flex-row",
            RadioGroupBaseTheme::make(props: ['size' => 'lg'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-5",
            RadioGroupBaseTheme::make(props: ['size' => 'lg'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full after:bg-default after:rounded-full after:size-1.5 bg-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'lg'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-1.5 flex-col",
            RadioGroupBaseTheme::make(props: ['size' => 'xl'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-base",
            RadioGroupBaseTheme::make(props: ['size' => 'xl'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 size-5 focus-visible:outline-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start text-base flex-row",
            RadioGroupBaseTheme::make(props: ['size' => 'xl'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center h-6",
            RadioGroupBaseTheme::make(props: ['size' => 'xl'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full after:bg-default after:rounded-full after:size-2 bg-primary",
            RadioGroupBaseTheme::make(props: ['size' => 'xl'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-start opacity-75 text-sm flex-row",
            RadioGroupBaseTheme::make(props: ['disabled' => 'true'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full ring ring-inset ring-accented overflow-hidden focus-visible:outline-2 focus-visible:outline-offset-2 cursor-not-allowed size-4 focus-visible:outline-primary",
            RadioGroupBaseTheme::make(props: ['disabled' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default cursor-not-allowed",
            RadioGroupBaseTheme::make(props: ['disabled' => 'true'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted cursor-not-allowed",
            RadioGroupBaseTheme::make(props: ['disabled' => 'true'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default after:content-['*'] after:ms-0.5 after:text-error text-sm",
            RadioGroupBaseTheme::make(props: ['required' => 'true'], slot: 'legend'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-xs border border-muted rounded-lg flex-row p-2.5 has-data-[state=checked]:border-primary',
            RadioGroupBaseTheme::make(props: ['size' => 'xs', 'variant' => 'card'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-xs border border-muted flex-row p-2.5 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            RadioGroupBaseTheme::make(props: ['size' => 'xs', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-xs border border-muted rounded-lg flex-row p-3 has-data-[state=checked]:border-primary',
            RadioGroupBaseTheme::make(props: ['size' => 'sm', 'variant' => 'card'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-xs border border-muted flex-row p-3 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            RadioGroupBaseTheme::make(props: ['size' => 'sm', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-sm border border-muted rounded-lg flex-row p-3.5 has-data-[state=checked]:border-primary',
            RadioGroupBaseTheme::make(props: ['size' => 'md', 'variant' => 'card'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-sm border border-muted flex-row p-3.5 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            RadioGroupBaseTheme::make(props: ['size' => 'md', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-sm border border-muted rounded-lg flex-row p-4 has-data-[state=checked]:border-primary',
            RadioGroupBaseTheme::make(props: ['size' => 'lg', 'variant' => 'card'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-sm border border-muted flex-row p-4 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            RadioGroupBaseTheme::make(props: ['size' => 'lg', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-base border border-muted rounded-lg flex-row p-4.5 has-data-[state=checked]:border-primary',
            RadioGroupBaseTheme::make(props: ['size' => 'xl', 'variant' => 'card'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start text-base border border-muted flex-row p-4.5 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            RadioGroupBaseTheme::make(props: ['size' => 'xl', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start border border-muted text-sm flex-row p-3.5 first-of-type:rounded-s-lg last-of-type:rounded-e-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            RadioGroupBaseTheme::make(props: ['orientation' => 'horizontal', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex gap-x-2 flex-row gap-y-1 gap-0 -space-x-px',
            RadioGroupBaseTheme::make(props: ['orientation' => 'horizontal', 'variant' => 'table'], slot: 'fieldset'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start border border-muted text-sm flex-row p-3.5 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            RadioGroupBaseTheme::make(props: ['orientation' => 'vertical', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex gap-x-2 flex-col gap-y-1 gap-0 -space-y-px',
            RadioGroupBaseTheme::make(props: ['orientation' => 'vertical', 'variant' => 'table'], slot: 'fieldset'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start border border-muted rounded-lg text-sm flex-row p-3.5 has-data-[state=checked]:border-primary',
            RadioGroupBaseTheme::make(props: ['color' => 'primary', 'variant' => 'card'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start border border-muted rounded-lg text-sm flex-row p-3.5 has-data-[state=checked]:border-inverted',
            RadioGroupBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'card'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start border border-muted text-sm flex-row p-3.5 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            RadioGroupBaseTheme::make(props: ['color' => 'primary', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start border border-muted text-sm flex-row p-3.5 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-elevated has-data-[state=checked]:border-inverted/50 has-data-[state=checked]:z-[1]',
            RadioGroupBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start border border-muted rounded-lg text-sm flex-row p-3.5 has-data-[state=checked]:border-primary cursor-not-allowed',
            RadioGroupBaseTheme::make(props: ['variant' => 'card', 'disabled' => true], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex items-start border border-muted text-sm flex-row p-3.5 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1] cursor-not-allowed',
            RadioGroupBaseTheme::make(props: ['variant' => 'table', 'disabled' => true], slot: 'item'),
        );
    }

}
