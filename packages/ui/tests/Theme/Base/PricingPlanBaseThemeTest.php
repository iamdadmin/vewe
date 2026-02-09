<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PricingPlanBaseTheme;

final class PricingPlanBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 bg-default ring ring-default",
            PricingPlanBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PricingPlanBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col min-w-0",
            PricingPlanBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-6 items-center",
            PricingPlanBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-3",
            PricingPlanBaseTheme::make(slot: 'titleWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-2xl sm:text-3xl text-pretty font-semibold",
            PricingPlanBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-base text-pretty mt-2",
            PricingPlanBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1",
            PricingPlanBaseTheme::make(slot: 'priceWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-3xl sm:text-4xl font-semibold",
            PricingPlanBaseTheme::make(slot: 'price'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted line-through text-xl sm:text-2xl",
            PricingPlanBaseTheme::make(slot: 'discount'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col justify-between min-w-0",
            PricingPlanBaseTheme::make(slot: 'billing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-toned truncate text-xs font-medium",
            PricingPlanBaseTheme::make(slot: 'billingPeriod'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted truncate text-xs font-medium",
            PricingPlanBaseTheme::make(slot: 'billingCycle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-3 flex-1 mt-6 grow-0",
            PricingPlanBaseTheme::make(slot: 'features'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-2 min-w-0",
            PricingPlanBaseTheme::make(slot: 'feature'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 shrink-0 text-primary",
            PricingPlanBaseTheme::make(slot: 'featureIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-sm truncate",
            PricingPlanBaseTheme::make(slot: 'featureTitle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PricingPlanBaseTheme::make(slot: 'badge'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PricingPlanBaseTheme::make(slot: 'button'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-base font-semibold text-default",
            PricingPlanBaseTheme::make(slot: 'tagline'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-xs/5 text-muted text-center text-balance",
            PricingPlanBaseTheme::make(slot: 'terms'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 grid-cols-1 lg:grid-cols-3 justify-between divide-y lg:divide-y-0 lg:divide-x divide-default bg-default ring ring-default",
            PricingPlanBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col min-w-0 lg:col-span-2 pb-6 lg:pb-0 lg:pr-6 justify-center",
            PricingPlanBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'body'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-6 items-center lg:justify-center lg:items-center lg:p-6 lg:max-w-xs lg:w-full lg:mx-auto",
            PricingPlanBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'footer'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-3 flex-1 mt-6 grow-0 lg:grid lg:grid-cols-2 lg:mt-12",
            PricingPlanBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'features'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-6 items-center justify-end",
            PricingPlanBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'footer'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1 mt-6",
            PricingPlanBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'priceWrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 bg-inverted",
            PricingPlanBaseTheme::make(props: ['variant' => 'solid'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-2xl sm:text-3xl text-pretty font-semibold text-inverted",
            PricingPlanBaseTheme::make(props: ['variant' => 'solid'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-base text-pretty mt-2 text-dimmed",
            PricingPlanBaseTheme::make(props: ['variant' => 'solid'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted text-3xl sm:text-4xl font-semibold text-inverted",
            PricingPlanBaseTheme::make(props: ['variant' => 'solid'], slot: 'price'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted line-through text-xl sm:text-2xl text-dimmed",
            PricingPlanBaseTheme::make(props: ['variant' => 'solid'], slot: 'discount'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted truncate text-xs font-medium text-dimmed",
            PricingPlanBaseTheme::make(props: ['variant' => 'solid'], slot: 'billingCycle'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-toned truncate text-xs font-medium text-dimmed",
            PricingPlanBaseTheme::make(props: ['variant' => 'solid'], slot: 'billingPeriod'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-sm truncate text-dimmed",
            PricingPlanBaseTheme::make(props: ['variant' => 'solid'], slot: 'featureTitle'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 bg-default ring ring-default",
            PricingPlanBaseTheme::make(props: ['variant' => 'outline'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 bg-elevated/50",
            PricingPlanBaseTheme::make(props: ['variant' => 'soft'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 bg-elevated/50 ring ring-default",
            PricingPlanBaseTheme::make(props: ['variant' => 'subtle'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 ring-2 ring-inset ring-primary bg-default ring ring-default",
            PricingPlanBaseTheme::make(props: ['highlight' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 lg:scale-[1.1] lg:z-[1] bg-default ring ring-default",
            PricingPlanBaseTheme::make(props: ['scale' => 'true'], slot: 'root'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 grid-cols-1 lg:grid-cols-3 justify-between divide-y lg:divide-y-0 lg:divide-x divide-default bg-elevated/50 divide-accented',
            PricingPlanBaseTheme::make(props: ['orientation' => 'horizontal', 'variant' => 'soft'], slot: 'root'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative grid rounded-lg p-6 lg:p-8 xl:p-10 gap-6 grid-cols-1 lg:grid-cols-3 justify-between divide-y lg:divide-y-0 lg:divide-x divide-default bg-elevated/50 ring ring-default divide-accented',
            PricingPlanBaseTheme::make(props: ['orientation' => 'horizontal', 'variant' => 'subtle'], slot: 'root'),
        );
    }

}
