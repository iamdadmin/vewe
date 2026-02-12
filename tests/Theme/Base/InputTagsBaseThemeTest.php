<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\InputTagsBaseTheme;

final class InputTagsBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 start-0 flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'leadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'leadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-y-0 end-0 flex items-center text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'trailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'trailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 wrap-anywhere data-[state='active']:bg-accented text-xs text-highlighted bg-default",
            InputTagsBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'itemText'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center rounded-xs text-dimmed hover:text-default hover:bg-accented/75 disabled:pointer-events-none transition-colors text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'itemDelete'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'itemDeleteIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 border-0 bg-transparent placeholder:text-dimmed focus:outline-none disabled:cursor-not-allowed disabled:opacity-75 text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(slot: 'input'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center group has-focus-visible:z-[1] text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors group-not-only:group-first:rounded-e-none group-not-only:group-last:rounded-s-none group-not-last:group-not-first:rounded-none text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative inline-flex items-center group has-focus-visible:z-[1] text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors group-not-only:group-first:rounded-b-none group-not-only:group-last:rounded-t-none group-not-last:group-not-first:rounded-none text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 wrap-anywhere data-[state='active']:bg-accented text-[10px]/3 text-highlighted bg-default",
            InputTagsBaseTheme::make(props: ['size' => 'xs'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3 text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(props: ['size' => 'xs'], slot: 'itemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 wrap-anywhere data-[state='active']:bg-accented text-[10px]/3 text-highlighted bg-default",
            InputTagsBaseTheme::make(props: ['size' => 'sm'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3 text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(props: ['size' => 'sm'], slot: 'itemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 wrap-anywhere data-[state='active']:bg-accented text-xs text-highlighted bg-default",
            InputTagsBaseTheme::make(props: ['size' => 'md'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(props: ['size' => 'md'], slot: 'itemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 wrap-anywhere data-[state='active']:bg-accented text-xs text-highlighted bg-default",
            InputTagsBaseTheme::make(props: ['size' => 'lg'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3.5 text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(props: ['size' => 'lg'], slot: 'itemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-1.5 py-0.5 rounded-sm font-medium inline-flex items-center gap-0.5 ring ring-inset ring-accented bg-elevated text-default data-disabled:cursor-not-allowed data-disabled:opacity-75 wrap-anywhere data-[state='active']:bg-accented text-sm text-highlighted bg-default",
            InputTagsBaseTheme::make(props: ['size' => 'xl'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4 text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(props: ['size' => 'xl'], slot: 'itemDeleteIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented",
            InputTagsBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-inverted",
            InputTagsBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(props: ['leading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(props: ['trailing' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(props: ['loading' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(props: ['highlight' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md transition-colors file:me-1.5 file:font-medium file:text-muted file:outline-none text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary",
            InputTagsBaseTheme::make(props: ['type' => 'file'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary',
            InputTagsBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-elevated ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary',
            InputTagsBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary ring-primary',
            InputTagsBaseTheme::make(props: ['color' => 'primary', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-inverted',
            InputTagsBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-elevated ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-inverted',
            InputTagsBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-inverted ring-inverted',
            InputTagsBaseTheme::make(props: ['color' => 'neutral', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary ps-7',
            InputTagsBaseTheme::make(props: ['leading' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary ps-8',
            InputTagsBaseTheme::make(props: ['leading' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary ps-9',
            InputTagsBaseTheme::make(props: ['leading' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary ps-10',
            InputTagsBaseTheme::make(props: ['leading' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary ps-11',
            InputTagsBaseTheme::make(props: ['leading' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary pe-7',
            InputTagsBaseTheme::make(props: ['trailing' => true, 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary pe-8',
            InputTagsBaseTheme::make(props: ['trailing' => true, 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary pe-9',
            InputTagsBaseTheme::make(props: ['trailing' => true, 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary pe-10',
            InputTagsBaseTheme::make(props: ['trailing' => true, 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-md transition-colors text-highlighted bg-default ring ring-inset ring-accented has-focus-visible:ring-2 has-focus-visible:ring-inset has-focus-visible:ring-primary pe-11',
            InputTagsBaseTheme::make(props: ['trailing' => true, 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            InputTagsBaseTheme::make(props: ['loading' => true, 'leading' => true], slot: 'leadingIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 text-dimmed text-highlighted bg-default ring ring-inset ring-accented animate-spin',
            InputTagsBaseTheme::make(props: ['loading' => true, 'leading' => false, 'trailing' => true], slot: 'trailingIcon'),
        );
    }

}
