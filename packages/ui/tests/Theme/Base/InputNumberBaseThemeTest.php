<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\InputNumberBaseTheme;

final class InputNumberBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(slot: 'leadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(slot: 'leadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(slot: 'trailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(slot: 'trailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute flex items-center px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(slot: 'increment'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute flex items-center px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(slot: 'decrement'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center group has-focus-visible:z-[1] px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors group-not-only:group-first:rounded-e-none group-not-only:group-last:rounded-s-none group-not-last:group-not-first:rounded-none px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center group has-focus-visible:z-[1] px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors group-not-only:group-first:rounded-b-none group-not-only:group-last:rounded-t-none group-not-last:group-not-first:rounded-none px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-secondary",
            InputNumberBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted",
            InputNumberBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(props: ['leading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(props: ['trailing' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(props: ['loading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors file:me-1.5 file:font-medium file:text-muted file:outline-none px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(props: ['type' => 'file'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute flex items-center opacity-75 cursor-not-allowed px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(props: ['disabled' => 'true'], slot: 'increment'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute flex items-center opacity-75 cursor-not-allowed px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(props: ['disabled' => 'true'], slot: 'decrement'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-center px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputNumberBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute flex items-center inset-y-0 end-0 pe-1 px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'increment'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute flex items-center inset-y-0 start-0 ps-1 px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'decrement'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute flex items-center top-0 end-0 pe-1 [&>button]:py-0 scale-80 px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'increment'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute flex items-center bottom-0 end-0 pe-1 [&>button]:py-0 scale-80 px-2.5 py-1.5 text-sm gap-1.5",
            InputNumberBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'decrement'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputNumberBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputNumberBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ring ring-inset ring-primary',
            InputNumberBaseTheme::make(props: ['color' => 'primary', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputNumberBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputNumberBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted ring ring-inset ring-inverted',
            InputNumberBaseTheme::make(props: ['color' => 'neutral', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2 py-1 text-xs gap-1 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-7',
            InputNumberBaseTheme::make(props: ['leading' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-xs gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-8',
            InputNumberBaseTheme::make(props: ['leading' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-9',
            InputNumberBaseTheme::make(props: ['leading' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-sm gap-2 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-10',
            InputNumberBaseTheme::make(props: ['leading' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-base gap-2 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-11',
            InputNumberBaseTheme::make(props: ['leading' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2 py-1 text-xs gap-1 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-7',
            InputNumberBaseTheme::make(props: ['trailing' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-xs gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-8',
            InputNumberBaseTheme::make(props: ['trailing' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-9',
            InputNumberBaseTheme::make(props: ['trailing' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-sm gap-2 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-10',
            InputNumberBaseTheme::make(props: ['trailing' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-base gap-2 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-11',
            InputNumberBaseTheme::make(props: ['trailing' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed px-2.5 py-1.5 text-sm gap-1.5 animate-spin',
            InputNumberBaseTheme::make(props: ['loading' => true, 'leading' => true], slot: 'leadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed px-2.5 py-1.5 text-sm gap-1.5 animate-spin',
            InputNumberBaseTheme::make(props: ['loading' => true, 'leading' => false, 'trailing' => true], slot: 'trailingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputNumberBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputNumberBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ring ring-inset ring-primary',
            InputNumberBaseTheme::make(props: ['color' => 'primary', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputNumberBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputNumberBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted ring ring-inset ring-inverted',
            InputNumberBaseTheme::make(props: ['color' => 'neutral', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-center px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary text-start',
            InputNumberBaseTheme::make(props: ['orientation' => 'horizontal', 'decrement' => false], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2 py-1 text-xs gap-1 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-7',
            InputNumberBaseTheme::make(props: ['decrement' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-xs gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-8',
            InputNumberBaseTheme::make(props: ['decrement' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-9',
            InputNumberBaseTheme::make(props: ['decrement' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-sm gap-2 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-10',
            InputNumberBaseTheme::make(props: ['decrement' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-base gap-2 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-11',
            InputNumberBaseTheme::make(props: ['decrement' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2 py-1 text-xs gap-1 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-7',
            InputNumberBaseTheme::make(props: ['increment' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-xs gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-8',
            InputNumberBaseTheme::make(props: ['increment' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-9',
            InputNumberBaseTheme::make(props: ['increment' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-sm gap-2 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-10',
            InputNumberBaseTheme::make(props: ['increment' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-base gap-2 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-11',
            InputNumberBaseTheme::make(props: ['increment' => true, 'size' => 'xl'], slot: 'base'),
        );
    }

}
