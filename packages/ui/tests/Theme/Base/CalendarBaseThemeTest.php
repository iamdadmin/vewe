<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\CalendarBaseTheme;

final class CalendarBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            CalendarBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-between",
            CalendarBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col space-y-4 pt-4 sm:flex-row sm:space-x-4 sm:space-y-0",
            CalendarBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-center font-medium truncate mx-auto text-sm",
            CalendarBaseTheme::make(slot: 'heading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full border-collapse select-none space-y-1 focus:outline-none",
            CalendarBaseTheme::make(slot: 'grid'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "grid grid-cols-7 place-items-center",
            CalendarBaseTheme::make(slot: 'gridRow'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 grid w-full grid-cols-7",
            CalendarBaseTheme::make(slot: 'gridWeekDaysRow'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "grid",
            CalendarBaseTheme::make(slot: 'gridBody'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-xs text-primary",
            CalendarBaseTheme::make(slot: 'headCell'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-muted text-xs",
            CalendarBaseTheme::make(slot: 'headCellWeek'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative text-center text-sm",
            CalendarBaseTheme::make(slot: 'cell'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-8 focus-visible:ring-primary data-[selected]:bg-primary data-[selected]:text-inverted data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(slot: 'cellTrigger'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative text-center text-muted text-xs",
            CalendarBaseTheme::make(slot: 'cellWeek'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-primary text-xs",
            CalendarBaseTheme::make(props: ['color' => 'primary'], slot: 'headCell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-secondary text-xs",
            CalendarBaseTheme::make(props: ['color' => 'secondary'], slot: 'headCell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-primary size-8 data-[selected]:bg-primary data-[selected]:text-inverted data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(props: ['color' => 'primary'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-secondary size-8 data-[selected]:bg-secondary data-[selected]:text-inverted data-today:not-data-[selected]:text-secondary data-[highlighted]:bg-secondary/20 hover:not-data-[selected]:bg-secondary/20",
            CalendarBaseTheme::make(props: ['color' => 'secondary'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-highlighted text-xs",
            CalendarBaseTheme::make(props: ['color' => 'neutral'], slot: 'headCell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-inverted size-8 data-[selected]:bg-inverted data-[selected]:text-inverted data-today:not-data-[selected]:text-highlighted data-[highlighted]:bg-inverted/20 hover:not-data-[selected]:bg-inverted/10",
            CalendarBaseTheme::make(props: ['color' => 'neutral'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-8 focus-visible:ring-primary data-[selected]:bg-primary data-[selected]:text-inverted data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(props: ['variant' => 'solid'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-8 focus-visible:ring-primary data-[selected]:ring data-[selected]:ring-inset data-[selected]:ring-primary/50 data-[selected]:text-primary data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/10 hover:not-data-[selected]:bg-primary/10",
            CalendarBaseTheme::make(props: ['variant' => 'outline'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-8 focus-visible:ring-primary data-[selected]:bg-primary/10 data-[selected]:text-primary data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(props: ['variant' => 'soft'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-8 focus-visible:ring-primary data-[selected]:bg-primary/10 data-[selected]:text-primary data-[selected]:ring data-[selected]:ring-inset data-[selected]:ring-primary/25 data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(props: ['variant' => 'subtle'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center font-medium truncate mx-auto text-xs",
            CalendarBaseTheme::make(props: ['size' => 'xs'], slot: 'heading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-center text-xs",
            CalendarBaseTheme::make(props: ['size' => 'xs'], slot: 'cell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-center text-muted text-xs",
            CalendarBaseTheme::make(props: ['size' => 'xs'], slot: 'cellWeek'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-[10px] text-primary",
            CalendarBaseTheme::make(props: ['size' => 'xs'], slot: 'headCell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-muted text-[10px]",
            CalendarBaseTheme::make(props: ['size' => 'xs'], slot: 'headCellWeek'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-7 focus-visible:ring-primary data-[selected]:bg-primary data-[selected]:text-inverted data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(props: ['size' => 'xs'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col space-y-4 pt-4 sm:flex-row sm:space-x-4 sm:space-y-0 space-y-2 pt-2",
            CalendarBaseTheme::make(props: ['size' => 'xs'], slot: 'body'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center font-medium truncate mx-auto text-xs",
            CalendarBaseTheme::make(props: ['size' => 'sm'], slot: 'heading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-xs text-primary",
            CalendarBaseTheme::make(props: ['size' => 'sm'], slot: 'headCell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-muted text-xs",
            CalendarBaseTheme::make(props: ['size' => 'sm'], slot: 'headCellWeek'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-center text-muted text-xs",
            CalendarBaseTheme::make(props: ['size' => 'sm'], slot: 'cellWeek'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-center text-xs",
            CalendarBaseTheme::make(props: ['size' => 'sm'], slot: 'cell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-7 focus-visible:ring-primary data-[selected]:bg-primary data-[selected]:text-inverted data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(props: ['size' => 'sm'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center font-medium truncate mx-auto text-sm",
            CalendarBaseTheme::make(props: ['size' => 'md'], slot: 'heading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-xs text-primary",
            CalendarBaseTheme::make(props: ['size' => 'md'], slot: 'headCell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-muted text-xs",
            CalendarBaseTheme::make(props: ['size' => 'md'], slot: 'headCellWeek'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-center text-muted text-xs",
            CalendarBaseTheme::make(props: ['size' => 'md'], slot: 'cellWeek'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-center text-sm",
            CalendarBaseTheme::make(props: ['size' => 'md'], slot: 'cell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-8 focus-visible:ring-primary data-[selected]:bg-primary data-[selected]:text-inverted data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(props: ['size' => 'md'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center font-medium truncate mx-auto text-md",
            CalendarBaseTheme::make(props: ['size' => 'lg'], slot: 'heading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-md text-primary",
            CalendarBaseTheme::make(props: ['size' => 'lg'], slot: 'headCell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-muted text-md",
            CalendarBaseTheme::make(props: ['size' => 'lg'], slot: 'headCellWeek'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-9 text-md focus-visible:ring-primary data-[selected]:bg-primary data-[selected]:text-inverted data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(props: ['size' => 'lg'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-center font-medium truncate mx-auto text-lg",
            CalendarBaseTheme::make(props: ['size' => 'xl'], slot: 'heading'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-lg text-primary",
            CalendarBaseTheme::make(props: ['size' => 'xl'], slot: 'headCell'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-md text-muted text-lg",
            CalendarBaseTheme::make(props: ['size' => 'xl'], slot: 'headCellWeek'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "m-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition size-10 text-lg focus-visible:ring-primary data-[selected]:bg-primary data-[selected]:text-inverted data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20",
            CalendarBaseTheme::make(props: ['size' => 'xl'], slot: 'cellTrigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid grid-cols-7 place-items-center grid-cols-8",
            CalendarBaseTheme::make(props: ['weekNumbers' => 'true'], slot: 'gridRow'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mb-1 grid w-full grid-cols-7 grid-cols-8 [&>*:first-child]:col-start-2",
            CalendarBaseTheme::make(props: ['weekNumbers' => 'true'], slot: 'gridWeekDaysRow'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'm-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-primary size-8 data-[selected]:bg-primary data-[selected]:text-inverted data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20',
            CalendarBaseTheme::make(props: ['color' => 'primary', 'variant' => 'solid'], slot: 'cellTrigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'm-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-primary size-8 data-[selected]:ring data-[selected]:ring-inset data-[selected]:ring-primary/50 data-[selected]:text-primary data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/10 hover:not-data-[selected]:bg-primary/10',
            CalendarBaseTheme::make(props: ['color' => 'primary', 'variant' => 'outline'], slot: 'cellTrigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'm-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-primary size-8 data-[selected]:bg-primary/10 data-[selected]:text-primary data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20',
            CalendarBaseTheme::make(props: ['color' => 'primary', 'variant' => 'soft'], slot: 'cellTrigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'm-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-primary size-8 data-[selected]:bg-primary/10 data-[selected]:text-primary data-[selected]:ring data-[selected]:ring-inset data-[selected]:ring-primary/25 data-today:not-data-[selected]:text-primary data-[highlighted]:bg-primary/20 hover:not-data-[selected]:bg-primary/20',
            CalendarBaseTheme::make(props: ['color' => 'primary', 'variant' => 'subtle'], slot: 'cellTrigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'm-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-inverted size-8 data-[selected]:bg-inverted data-[selected]:text-inverted data-today:not-data-[selected]:text-highlighted data-[highlighted]:bg-inverted/20 hover:not-data-[selected]:bg-inverted/10',
            CalendarBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'solid'], slot: 'cellTrigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'm-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-inverted size-8 data-[selected]:ring data-[selected]:ring-inset data-[selected]:ring-accented data-[selected]:text-default data-[selected]:bg-default data-today:not-data-[selected]:text-highlighted data-[highlighted]:bg-inverted/10 hover:not-data-[selected]:bg-inverted/10',
            CalendarBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'outline'], slot: 'cellTrigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'm-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-inverted size-8 data-[selected]:bg-elevated data-[selected]:text-default data-today:not-data-[selected]:text-highlighted data-[highlighted]:bg-inverted/20 hover:not-data-[selected]:bg-inverted/10',
            CalendarBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'soft'], slot: 'cellTrigger'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'm-0.5 relative flex items-center justify-center rounded-full whitespace-nowrap focus-visible:ring-2 focus:outline-none data-disabled:text-muted data-unavailable:line-through data-unavailable:text-muted data-unavailable:pointer-events-none data-today:font-semibold data-[outside-view]:text-muted transition focus-visible:ring-inverted size-8 data-[selected]:bg-elevated data-[selected]:text-default data-[selected]:ring data-[selected]:ring-inset data-[selected]:ring-accented data-today:not-data-[selected]:text-highlighted data-[highlighted]:bg-inverted/20 hover:not-data-[selected]:bg-inverted/10',
            CalendarBaseTheme::make(props: ['color' => 'neutral', 'variant' => 'subtle'], slot: 'cellTrigger'),
        );
    }

}
