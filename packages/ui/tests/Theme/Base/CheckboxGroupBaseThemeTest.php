<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\CheckboxGroupBaseTheme;

final class CheckboxGroupBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            CheckboxGroupBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-1",
            CheckboxGroupBaseTheme::make(slot: 'fieldset'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-sm",
            CheckboxGroupBaseTheme::make(slot: 'legend'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            CheckboxGroupBaseTheme::make(slot: 'item'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 flex-row gap-y-1",
            CheckboxGroupBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 flex-col gap-y-1",
            CheckboxGroupBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            CheckboxGroupBaseTheme::make(props: ['color' => 'primary'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            CheckboxGroupBaseTheme::make(props: ['color' => 'secondary'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            CheckboxGroupBaseTheme::make(props: ['color' => 'neutral'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            CheckboxGroupBaseTheme::make(props: ['variant' => 'list'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            CheckboxGroupBaseTheme::make(props: ['variant' => 'card'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border border-muted p-3.5 has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]",
            CheckboxGroupBaseTheme::make(props: ['variant' => 'table'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-0.5",
            CheckboxGroupBaseTheme::make(props: ['size' => 'xs'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-xs",
            CheckboxGroupBaseTheme::make(props: ['size' => 'xs'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-0.5",
            CheckboxGroupBaseTheme::make(props: ['size' => 'sm'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-xs",
            CheckboxGroupBaseTheme::make(props: ['size' => 'sm'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-1",
            CheckboxGroupBaseTheme::make(props: ['size' => 'md'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-sm",
            CheckboxGroupBaseTheme::make(props: ['size' => 'md'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-1",
            CheckboxGroupBaseTheme::make(props: ['size' => 'lg'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-sm",
            CheckboxGroupBaseTheme::make(props: ['size' => 'lg'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-x-2 gap-y-1.5",
            CheckboxGroupBaseTheme::make(props: ['size' => 'xl'], slot: 'fieldset'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default text-base",
            CheckboxGroupBaseTheme::make(props: ['size' => 'xl'], slot: 'legend'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 block font-medium text-default after:content-['*'] after:ms-0.5 after:text-error text-sm",
            CheckboxGroupBaseTheme::make(props: ['required' => 'true'], slot: 'legend'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-2.5 has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            CheckboxGroupBaseTheme::make(props: ['size' => 'xs', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-3 has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            CheckboxGroupBaseTheme::make(props: ['size' => 'sm', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-3.5 has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            CheckboxGroupBaseTheme::make(props: ['size' => 'md', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-4 has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            CheckboxGroupBaseTheme::make(props: ['size' => 'lg', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-4.5 has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            CheckboxGroupBaseTheme::make(props: ['size' => 'xl', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-3.5 first-of-type:rounded-s-lg last-of-type:rounded-e-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            CheckboxGroupBaseTheme::make(props: ['orientation' => 'horizontal', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex gap-x-2 flex-row gap-y-1 gap-0 -space-x-px',
            CheckboxGroupBaseTheme::make(props: ['orientation' => 'horizontal', 'variant' => 'table'], slot: 'fieldset'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-3.5 first-of-type:rounded-t-lg last-of-type:rounded-b-lg has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            CheckboxGroupBaseTheme::make(props: ['orientation' => 'vertical', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex gap-x-2 flex-col gap-y-1 gap-0 -space-y-px',
            CheckboxGroupBaseTheme::make(props: ['orientation' => 'vertical', 'variant' => 'table'], slot: 'fieldset'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-3.5 has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1]',
            CheckboxGroupBaseTheme::make(props: ['color' => 'primary', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-3.5 has-data-[state=checked]:bg-elevated has-data-[state=checked]:border-inverted/50 has-data-[state=checked]:z-[1]',
            CheckboxGroupBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'table'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'border border-muted p-3.5 has-data-[state=checked]:bg-primary/10 has-data-[state=checked]:border-primary/50 has-data-[state=checked]:z-[1] cursor-not-allowed',
            CheckboxGroupBaseTheme::make(props: ['variant' => 'table', 'disabled' => true], slot: 'item'),
        );
    }

}
