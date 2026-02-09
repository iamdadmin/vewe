<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\BadgeBaseTheme;

final class BadgeBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary text-inverted",
            BadgeBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary text-inverted",
            BadgeBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            BadgeBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            BadgeBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            BadgeBaseTheme::make(slot: 'leadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            BadgeBaseTheme::make(slot: 'leadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            BadgeBaseTheme::make(slot: 'trailingIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center not-only:first:rounded-e-none not-only:last:rounded-s-none not-last:not-first:rounded-none focus-visible:z-[1] text-xs px-2 py-1 gap-1 rounded-md bg-primary text-inverted",
            BadgeBaseTheme::make(props: ['fieldGroup' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center not-only:first:rounded-b-none not-only:last:rounded-t-none not-last:not-first:rounded-none focus-visible:z-[1] text-xs px-2 py-1 gap-1 rounded-md bg-primary text-inverted",
            BadgeBaseTheme::make(props: ['fieldGroup' => 'vertical'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary text-inverted",
            BadgeBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-secondary text-inverted",
            BadgeBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md text-inverted bg-inverted",
            BadgeBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary text-inverted",
            BadgeBaseTheme::make(props: ['variant' => 'solid'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md text-primary ring ring-inset ring-primary/50",
            BadgeBaseTheme::make(props: ['variant' => 'outline'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary/10 text-primary",
            BadgeBaseTheme::make(props: ['variant' => 'soft'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary/10 text-primary ring ring-inset ring-primary/25",
            BadgeBaseTheme::make(props: ['variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-[8px]/3 px-1 py-0.5 gap-1 rounded-sm bg-primary text-inverted",
            BadgeBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3",
            BadgeBaseTheme::make(props: ['size' => 'xs'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            BadgeBaseTheme::make(props: ['size' => 'xs'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3",
            BadgeBaseTheme::make(props: ['size' => 'xs'], slot: 'trailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-[10px]/3 px-1.5 py-1 gap-1 rounded-sm bg-primary text-inverted",
            BadgeBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3",
            BadgeBaseTheme::make(props: ['size' => 'sm'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            BadgeBaseTheme::make(props: ['size' => 'sm'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3",
            BadgeBaseTheme::make(props: ['size' => 'sm'], slot: 'trailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary text-inverted",
            BadgeBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            BadgeBaseTheme::make(props: ['size' => 'md'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "3xs",
            BadgeBaseTheme::make(props: ['size' => 'md'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            BadgeBaseTheme::make(props: ['size' => 'md'], slot: 'trailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-sm px-2 py-1 gap-1.5 rounded-md bg-primary text-inverted",
            BadgeBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            BadgeBaseTheme::make(props: ['size' => 'lg'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            BadgeBaseTheme::make(props: ['size' => 'lg'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            BadgeBaseTheme::make(props: ['size' => 'lg'], slot: 'trailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium inline-flex items-center text-base px-2.5 py-1 gap-1.5 rounded-md bg-primary text-inverted",
            BadgeBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            BadgeBaseTheme::make(props: ['size' => 'xl'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            BadgeBaseTheme::make(props: ['size' => 'xl'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            BadgeBaseTheme::make(props: ['size' => 'xl'], slot: 'trailingIcon'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary text-inverted',
            BadgeBaseTheme::make(props: ['color' => 'primary', 'variant' => 'solid'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md text-primary ring ring-inset ring-primary/50',
            BadgeBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary/10 text-primary',
            BadgeBaseTheme::make(props: ['color' => 'primary', 'variant' => 'soft'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary/10 text-primary ring ring-inset ring-primary/25',
            BadgeBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md text-inverted bg-inverted',
            BadgeBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'solid'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md ring ring-inset ring-accented text-default bg-default',
            BadgeBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md text-default bg-elevated',
            BadgeBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'soft'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md ring ring-inset ring-accented text-default bg-elevated',
            BadgeBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-[8px]/3 px-1 py-0.5 gap-1 rounded-sm bg-primary text-inverted p-0.5',
            BadgeBaseTheme::make(props: ['size' => 'xs', 'square' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-[10px]/3 px-1.5 py-1 gap-1 rounded-sm bg-primary text-inverted p-1',
            BadgeBaseTheme::make(props: ['size' => 'sm', 'square' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-xs px-2 py-1 gap-1 rounded-md bg-primary text-inverted p-1',
            BadgeBaseTheme::make(props: ['size' => 'md', 'square' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-sm px-2 py-1 gap-1.5 rounded-md bg-primary text-inverted p-1',
            BadgeBaseTheme::make(props: ['size' => 'lg', 'square' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'font-medium inline-flex items-center text-base px-2.5 py-1 gap-1.5 rounded-md bg-primary text-inverted p-1',
            BadgeBaseTheme::make(props: ['size' => 'xl', 'square' => true], slot: 'base'),
        );
    }

}
