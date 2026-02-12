<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\TimelineBaseTheme;

final class TimelineBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-1.5",
            TimelineBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative flex flex-1 gap-3",
            TimelineBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-center gap-1.5",
            TimelineBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted group-data-[state=completed]:bg-primary group-data-[state=active]:bg-primary",
            TimelineBaseTheme::make(slot: 'indicator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 rounded-full bg-elevated",
            TimelineBaseTheme::make(slot: 'separator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full",
            TimelineBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-dimmed text-xs/5",
            TimelineBaseTheme::make(slot: 'date'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-highlighted text-sm",
            TimelineBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-wrap text-sm",
            TimelineBaseTheme::make(slot: 'description'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-1.5 flex-row w-full",
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative flex flex-1 gap-3 flex-col",
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 rounded-full bg-elevated h-0.5",
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'separator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-1.5 flex-col",
            TimelineBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-center gap-1.5 flex-col",
            TimelineBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 rounded-full bg-elevated w-0.5",
            TimelineBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'separator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted group-data-[state=completed]:bg-primary group-data-[state=active]:bg-primary",
            TimelineBaseTheme::make(props: ['color' => 'primary'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted group-data-[state=completed]:bg-secondary group-data-[state=active]:bg-secondary",
            TimelineBaseTheme::make(props: ['color' => 'secondary'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted group-data-[state=completed]:bg-inverted group-data-[state=active]:bg-inverted",
            TimelineBaseTheme::make(props: ['color' => 'neutral'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['size' => '3xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['size' => '2xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['size' => '2xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['size' => '3xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            TimelineBaseTheme::make(props: ['reverse' => 'true'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex-1 rounded-full bg-elevated group-data-[state=completed]:bg-primary',
            TimelineBaseTheme::make(props: ['color' => 'primary', 'reverse' => false], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex-1 rounded-full bg-elevated group-data-[state=active]:bg-primary group-data-[state=completed]:bg-primary',
            TimelineBaseTheme::make(props: ['color' => 'primary', 'reverse' => true], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex-1 rounded-full bg-elevated group-data-[state=completed]:bg-inverted',
            TimelineBaseTheme::make(props: ['color' => 'neutral', 'reverse' => false], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex-1 rounded-full bg-elevated group-data-[state=active]:bg-inverted group-data-[state=completed]:bg-inverted',
            TimelineBaseTheme::make(props: ['color' => 'neutral', 'reverse' => true], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pe-4.5',
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => '3xs'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pe-5',
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => '2xs'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pe-5.5',
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xs'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pe-6',
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'sm'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pe-6.5',
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'md'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pe-7',
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'lg'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pe-7.5',
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xl'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pe-8',
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => '2xl'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pe-8.5',
            TimelineBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => '3xl'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full -mt-0.5 pb-4.5',
            TimelineBaseTheme::make(props: ['orientation' => 'vertical', 'size' => '3xs'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full pb-5',
            TimelineBaseTheme::make(props: ['orientation' => 'vertical', 'size' => '2xs'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full mt-0.5 pb-5.5',
            TimelineBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xs'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full mt-1 pb-6',
            TimelineBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'sm'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full mt-1.5 pb-6.5',
            TimelineBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'md'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full mt-2 pb-7',
            TimelineBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'lg'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full mt-2.5 pb-7.5',
            TimelineBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xl'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full mt-3 pb-8',
            TimelineBaseTheme::make(props: ['orientation' => 'vertical', 'size' => '2xl'], slot: 'wrapper'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full mt-3.5 pb-8.5',
            TimelineBaseTheme::make(props: ['orientation' => 'vertical', 'size' => '3xl'], slot: 'wrapper'),
        );
    }

}
