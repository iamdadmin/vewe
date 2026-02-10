<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PricingTableBaseTheme;

final class PricingTableBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full relative",
            PricingTableBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full table-fixed border-separate border-spacing-x-0 hidden md:table",
            PricingTableBaseTheme::make(slot: 'table'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "md:hidden flex flex-col gap-6 w-full",
            PricingTableBaseTheme::make(slot: 'list'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-6 flex flex-col border border-default rounded-lg",
            PricingTableBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "sr-only",
            PricingTableBaseTheme::make(slot: 'caption'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PricingTableBaseTheme::make(slot: 'thead'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PricingTableBaseTheme::make(slot: 'tbody'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PricingTableBaseTheme::make(slot: 'tr'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "py-4 font-normal text-left border-b border-default",
            PricingTableBaseTheme::make(slot: 'th'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "px-6 py-4 text-center border-b border-default",
            PricingTableBaseTheme::make(slot: 'td'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-6 text-left font-normal",
            PricingTableBaseTheme::make(slot: 'tier'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-3",
            PricingTableBaseTheme::make(slot: 'tierTitleWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-lg font-semibold text-highlighted",
            PricingTableBaseTheme::make(slot: 'tierTitle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm font-normal text-muted mt-1",
            PricingTableBaseTheme::make(slot: 'tierDescription'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            PricingTableBaseTheme::make(slot: 'tierBadge'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1 mt-4",
            PricingTableBaseTheme::make(slot: 'tierPriceWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-3xl sm:text-4xl font-semibold",
            PricingTableBaseTheme::make(slot: 'tierPrice'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted line-through text-xl sm:text-2xl",
            PricingTableBaseTheme::make(slot: 'tierDiscount'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col justify-between min-w-0",
            PricingTableBaseTheme::make(slot: 'tierBilling'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-toned truncate text-xs font-medium",
            PricingTableBaseTheme::make(slot: 'tierBillingPeriod'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted truncate text-xs font-medium",
            PricingTableBaseTheme::make(slot: 'tierBillingCycle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-6",
            PricingTableBaseTheme::make(slot: 'tierButton'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0",
            PricingTableBaseTheme::make(slot: 'tierFeatureIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-6 flex flex-col gap-2",
            PricingTableBaseTheme::make(slot: 'section'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-sm text-highlighted",
            PricingTableBaseTheme::make(slot: 'sectionTitle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-between gap-1",
            PricingTableBaseTheme::make(slot: 'feature'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-default",
            PricingTableBaseTheme::make(slot: 'featureTitle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm text-muted flex justify-center min-w-5",
            PricingTableBaseTheme::make(slot: 'featureValue'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "*:pt-8",
            PricingTableBaseTheme::make(props: ['section' => 'true'], slot: 'tr'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0 text-primary",
            PricingTableBaseTheme::make(props: ['active' => 'true'], slot: 'tierFeatureIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "p-6 text-left font-normal bg-elevated/50 border-x border-t border-default rounded-t-lg",
            PricingTableBaseTheme::make(props: ['highlight' => 'true'], slot: 'tier'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-6 py-4 text-center border-b border-default bg-elevated/50 border-x",
            PricingTableBaseTheme::make(props: ['highlight' => 'true'], slot: 'td'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "p-6 flex flex-col border border-default rounded-lg bg-elevated/50",
            PricingTableBaseTheme::make(props: ['highlight' => 'true'], slot: 'item'),
        );
    }

}
