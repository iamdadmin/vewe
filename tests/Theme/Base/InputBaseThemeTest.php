<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\InputBaseTheme;

final class InputBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center ps-2.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(slot: 'leadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xs text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(slot: 'leadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center pe-2.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(slot: 'trailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(slot: 'trailingIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center group has-focus-visible:z-[1] text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors group-not-only:group-first:rounded-e-none group-not-only:group-last:rounded-s-none group-not-last:group-not-first:rounded-none px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center group has-focus-visible:z-[1] text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors group-not-only:group-first:rounded-b-none group-not-only:group-last:rounded-t-none group-not-last:group-not-first:rounded-none px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2 py-1 text-xs gap-1 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center ps-2 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xs'], slot: 'leading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center pe-2 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xs'], slot: 'trailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xs'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xs'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xs'], slot: 'trailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-xs gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center ps-2.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'sm'], slot: 'leading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center pe-2.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'sm'], slot: 'trailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'sm'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'sm'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'sm'], slot: 'trailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center ps-2.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'md'], slot: 'leading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center pe-2.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'md'], slot: 'trailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'md'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'md'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'md'], slot: 'trailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-sm gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center ps-3 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'lg'], slot: 'leading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center pe-3 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'lg'], slot: 'trailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'lg'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'lg'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-5 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'lg'], slot: 'trailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-base gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center ps-3 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xl'], slot: 'leading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center pe-3 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xl'], slot: 'trailing'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-6 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xl'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "xs text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xl'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed size-6 text-highlighted bg-default ring ring-inset ring-accented",
            InputBaseTheme::make(props: ['size' => 'xl'], slot: 'trailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-secondary",
            InputBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted",
            InputBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['leading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['trailing' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['loading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['highlight' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors file:me-1.5 file:font-medium file:text-muted file:outline-none px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputBaseTheme::make(props: ['type' => 'file'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-elevated ring ring-inset ring-accented px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ring-primary',
            InputBaseTheme::make(props: ['color' => 'primary', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors text-highlighted bg-elevated ring ring-inset ring-accented px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted ring-inverted',
            InputBaseTheme::make(props: ['color' => 'neutral', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2 py-1 text-xs gap-1 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-7',
            InputBaseTheme::make(props: ['leading' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-xs gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-8',
            InputBaseTheme::make(props: ['leading' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-9',
            InputBaseTheme::make(props: ['leading' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-sm gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-10',
            InputBaseTheme::make(props: ['leading' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-base gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-11',
            InputBaseTheme::make(props: ['leading' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2 py-1 text-xs gap-1 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-7',
            InputBaseTheme::make(props: ['trailing' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-xs gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-8',
            InputBaseTheme::make(props: ['trailing' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-9',
            InputBaseTheme::make(props: ['trailing' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-sm gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-10',
            InputBaseTheme::make(props: ['trailing' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full rounded-md border-0 appearance-none placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 transition-colors px-3 py-2 text-base gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-11',
            InputBaseTheme::make(props: ['trailing' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed size-5 text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            InputBaseTheme::make(props: ['loading' => true, 'leading' => true], slot: 'leadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed size-5 text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            InputBaseTheme::make(props: ['loading' => true, 'leading' => false, 'trailing' => true], slot: 'trailingIcon'),
        );
    }

}
