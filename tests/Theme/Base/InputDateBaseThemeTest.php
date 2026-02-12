<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\InputDateBaseTheme;

final class InputDateBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted bg-default ring ring-inset ring-accented",
            InputDateBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            InputDateBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented",
            InputDateBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-highlighted bg-default ring ring-inset ring-accented",
            InputDateBaseTheme::make(slot: 'leadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted bg-default ring ring-inset ring-accented",
            InputDateBaseTheme::make(slot: 'leadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            InputDateBaseTheme::make(slot: 'trailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented",
            InputDateBaseTheme::make(slot: 'trailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11 text-highlighted bg-default ring ring-inset ring-accented focus:bg-elevated",
            InputDateBaseTheme::make(slot: 'segment'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-muted text-highlighted bg-default ring ring-inset ring-accented",
            InputDateBaseTheme::make(slot: 'separatorIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors not-only:first:rounded-e-none not-only:last:rounded-s-none not-last:not-first:rounded-none focus-visible:z-[1] px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors not-only:first:rounded-b-none not-only:last:rounded-t-none not-last:not-first:rounded-none focus-visible:z-[1] px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2 py-1 text-xs gap-1 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors data-[segment=day]:w-6 data-[segment=month]:w-6 data-[segment=year]:w-9 text-highlighted bg-default ring ring-inset ring-accented focus:bg-elevated",
            InputDateBaseTheme::make(props: ['size' => 'xs'], slot: 'segment'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-xs gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors data-[segment=day]:w-6 data-[segment=month]:w-6 data-[segment=year]:w-9 text-highlighted bg-default ring ring-inset ring-accented focus:bg-elevated",
            InputDateBaseTheme::make(props: ['size' => 'sm'], slot: 'segment'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11 text-highlighted bg-default ring ring-inset ring-accented focus:bg-elevated",
            InputDateBaseTheme::make(props: ['size' => 'md'], slot: 'segment'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-3 py-2 text-sm gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11 text-highlighted bg-default ring ring-inset ring-accented focus:bg-elevated",
            InputDateBaseTheme::make(props: ['size' => 'lg'], slot: 'segment'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-3 py-2 text-base gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors data-[segment=day]:w-8 data-[segment=month]:w-8 data-[segment=year]:w-13 text-highlighted bg-default ring ring-inset ring-accented focus:bg-elevated",
            InputDateBaseTheme::make(props: ['size' => 'xl'], slot: 'segment'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputDateBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted",
            InputDateBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['leading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['trailing' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['loading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['highlight' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative inline-flex items-center rounded-md select-none transition-colors file:me-1.5 file:font-medium file:text-muted file:outline-none px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary",
            InputDateBaseTheme::make(props: ['type' => 'file'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors text-highlighted bg-default ring ring-inset ring-accented px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputDateBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors text-highlighted bg-elevated ring ring-inset ring-accented px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
            InputDateBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ring-primary',
            InputDateBaseTheme::make(props: ['color' => 'primary', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors text-highlighted bg-default ring ring-inset ring-accented px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputDateBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors text-highlighted bg-elevated ring ring-inset ring-accented px-2.5 py-1.5 text-sm gap-1.5 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted',
            InputDateBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-inverted ring-inverted',
            InputDateBaseTheme::make(props: ['color' => 'neutral', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-2 py-1 text-xs gap-1 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-7',
            InputDateBaseTheme::make(props: ['leading' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-xs gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-8',
            InputDateBaseTheme::make(props: ['leading' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-9',
            InputDateBaseTheme::make(props: ['leading' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-3 py-2 text-sm gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-10',
            InputDateBaseTheme::make(props: ['leading' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-3 py-2 text-base gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary ps-11',
            InputDateBaseTheme::make(props: ['leading' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-2 py-1 text-xs gap-1 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-7',
            InputDateBaseTheme::make(props: ['trailing' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-xs gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-8',
            InputDateBaseTheme::make(props: ['trailing' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-2.5 py-1.5 text-sm gap-1.5 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-9',
            InputDateBaseTheme::make(props: ['trailing' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-3 py-2 text-sm gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-10',
            InputDateBaseTheme::make(props: ['trailing' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative inline-flex items-center rounded-md select-none transition-colors px-3 py-2 text-base gap-2 text-highlighted bg-default ring ring-inset ring-accented focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary pe-11',
            InputDateBaseTheme::make(props: ['trailing' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            InputDateBaseTheme::make(props: ['loading' => true, 'leading' => true], slot: 'leadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            InputDateBaseTheme::make(props: ['loading' => true, 'leading' => false, 'trailing' => true], slot: 'trailingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors text-highlighted bg-default ring ring-inset ring-accented data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11 focus:bg-elevated',
            InputDateBaseTheme::make(props: ['variant' => 'outline'], slot: 'segment'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors text-highlighted bg-elevated/50 hover:bg-elevated focus:bg-elevated disabled:bg-elevated/50 data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11 focus:bg-accented/50 group-hover:focus:bg-accented',
            InputDateBaseTheme::make(props: ['variant' => 'soft'], slot: 'segment'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors text-highlighted bg-elevated ring ring-inset ring-accented data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11 focus:bg-accented',
            InputDateBaseTheme::make(props: ['variant' => 'subtle'], slot: 'segment'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors text-highlighted bg-transparent hover:bg-elevated focus:bg-elevated disabled:bg-transparent dark:disabled:bg-transparent data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11 group-hover:focus:bg-accented',
            InputDateBaseTheme::make(props: ['variant' => 'ghost'], slot: 'segment'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded text-center outline-hidden data-placeholder:text-dimmed data-[segment=literal]:text-muted data-invalid:text-error data-disabled:cursor-not-allowed data-disabled:opacity-75 transition-colors text-highlighted bg-transparent data-[segment=day]:w-7 data-[segment=month]:w-7 data-[segment=year]:w-11 focus:bg-elevated',
            InputDateBaseTheme::make(props: ['variant' => 'none'], slot: 'segment'),
        );
    }

}
