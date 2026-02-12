<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\TreeBaseTheme;

final class TreeBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative isolate",
            TreeBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full",
            TreeBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "border-s border-default ms-5",
            TreeBaseTheme::make(slot: 'listWithChildren'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ps-1.5 -ms-px",
            TreeBaseTheme::make(slot: 'itemWithChildren'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary px-2.5 py-1.5 gap-1.5",
            TreeBaseTheme::make(slot: 'link'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 relative size-5",
            TreeBaseTheme::make(slot: 'linkLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            TreeBaseTheme::make(slot: 'linkLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex gap-1.5 items-center",
            TreeBaseTheme::make(slot: 'linkTrailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 transform transition-transform duration-200 group-data-expanded:rotate-180 size-5",
            TreeBaseTheme::make(slot: 'linkTrailingIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative isolate overflow-y-auto",
            TreeBaseTheme::make(props: ['virtualize' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary px-2.5 py-1.5 gap-1.5",
            TreeBaseTheme::make(props: ['color' => 'primary'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-secondary px-2.5 py-1.5 gap-1.5",
            TreeBaseTheme::make(props: ['color' => 'secondary'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-inverted px-2.5 py-1.5 gap-1.5",
            TreeBaseTheme::make(props: ['color' => 'neutral'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-s border-default ms-4",
            TreeBaseTheme::make(props: ['size' => 'xs'], slot: 'listWithChildren'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-2 py-1 text-xs gap-1 focus-visible:before:ring-primary",
            TreeBaseTheme::make(props: ['size' => 'xs'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 relative size-4",
            TreeBaseTheme::make(props: ['size' => 'xs'], slot: 'linkLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 transform transition-transform duration-200 group-data-expanded:rotate-180 size-4",
            TreeBaseTheme::make(props: ['size' => 'xs'], slot: 'linkTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-s border-default ms-4.5",
            TreeBaseTheme::make(props: ['size' => 'sm'], slot: 'listWithChildren'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-2.5 py-1.5 text-xs gap-1.5 focus-visible:before:ring-primary",
            TreeBaseTheme::make(props: ['size' => 'sm'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 relative size-4",
            TreeBaseTheme::make(props: ['size' => 'sm'], slot: 'linkLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 transform transition-transform duration-200 group-data-expanded:rotate-180 size-4",
            TreeBaseTheme::make(props: ['size' => 'sm'], slot: 'linkTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-s border-default ms-5",
            TreeBaseTheme::make(props: ['size' => 'md'], slot: 'listWithChildren'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-2.5 py-1.5 gap-1.5 focus-visible:before:ring-primary",
            TreeBaseTheme::make(props: ['size' => 'md'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 relative size-5",
            TreeBaseTheme::make(props: ['size' => 'md'], slot: 'linkLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 transform transition-transform duration-200 group-data-expanded:rotate-180 size-5",
            TreeBaseTheme::make(props: ['size' => 'md'], slot: 'linkTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-s border-default ms-5.5",
            TreeBaseTheme::make(props: ['size' => 'lg'], slot: 'listWithChildren'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-3 py-2 gap-2 focus-visible:before:ring-primary",
            TreeBaseTheme::make(props: ['size' => 'lg'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 relative size-5",
            TreeBaseTheme::make(props: ['size' => 'lg'], slot: 'linkLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 transform transition-transform duration-200 group-data-expanded:rotate-180 size-5",
            TreeBaseTheme::make(props: ['size' => 'lg'], slot: 'linkTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-s border-default ms-6",
            TreeBaseTheme::make(props: ['size' => 'xl'], slot: 'listWithChildren'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 px-3 py-2 text-base gap-2 focus-visible:before:ring-primary",
            TreeBaseTheme::make(props: ['size' => 'xl'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 relative size-6",
            TreeBaseTheme::make(props: ['size' => 'xl'], slot: 'linkLeadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 transform transition-transform duration-200 group-data-expanded:rotate-180 size-6",
            TreeBaseTheme::make(props: ['size' => 'xl'], slot: 'linkTrailingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 before:bg-elevated focus-visible:before:ring-primary px-2.5 py-1.5 gap-1.5",
            TreeBaseTheme::make(props: ['selected' => 'true'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 cursor-not-allowed opacity-75 focus-visible:before:ring-primary px-2.5 py-1.5 gap-1.5",
            TreeBaseTheme::make(props: ['disabled' => 'true'], slot: 'link'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary px-2.5 py-1.5 gap-1.5 text-primary',
            TreeBaseTheme::make(props: ['color' => 'primary', 'selected' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-inverted px-2.5 py-1.5 gap-1.5 text-highlighted',
            TreeBaseTheme::make(props: ['color' => 'neutral', 'selected' => true], slot: 'link'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative group w-full flex items-center text-sm select-none before:absolute before:inset-y-px before:inset-x-0 before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 focus-visible:before:ring-primary px-2.5 py-1.5 gap-1.5 hover:text-highlighted hover:before:bg-elevated/50 transition-colors before:transition-colors',
            TreeBaseTheme::make(props: ['selected' => false, 'disabled' => false], slot: 'link'),
        );
    }

}
