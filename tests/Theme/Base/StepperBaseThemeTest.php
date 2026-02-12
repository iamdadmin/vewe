<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\StepperBaseTheme;

final class StepperBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-4",
            StepperBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex",
            StepperBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group text-center relative w-full",
            StepperBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            StepperBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full font-medium text-center align-middle flex items-center justify-center font-semibold group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted bg-elevated focus-visible:outline-2 focus-visible:outline-offset-2 size-10 text-base group-data-[state=completed]:bg-primary group-data-[state=active]:bg-primary focus-visible:outline-primary",
            StepperBaseTheme::make(slot: 'trigger'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center justify-center size-full",
            StepperBaseTheme::make(slot: 'indicator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            StepperBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full group-data-[disabled]:opacity-75 bg-accented group-data-[state=completed]:bg-primary",
            StepperBaseTheme::make(slot: 'separator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-2.5",
            StepperBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default text-sm",
            StepperBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-wrap text-sm",
            StepperBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-full",
            StepperBaseTheme::make(slot: 'content'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex gap-4 flex-col",
            StepperBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex justify-center",
            StepperBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full group-data-[disabled]:opacity-75 bg-accented top-[calc(50%-2px)] h-0.5 group-data-[state=completed]:bg-primary start-[calc(50%+28px)] end-[calc(-50%+28px)]",
            StepperBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'separator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 mt-2.5",
            StepperBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-4",
            StepperBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'header'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group text-center relative w-full flex text-start gap-2.5",
            StepperBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'item'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full group-data-[disabled]:opacity-75 bg-accented start-[calc(50%-1px)] -bottom-[10px] w-0.5 group-data-[state=completed]:bg-primary top-[46px]",
            StepperBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'separator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full font-medium text-center align-middle flex items-center justify-center font-semibold group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted bg-elevated focus-visible:outline-2 focus-visible:outline-offset-2 size-6 text-xs group-data-[state=completed]:bg-primary group-data-[state=active]:bg-primary focus-visible:outline-primary",
            StepperBaseTheme::make(props: ['size' => 'xs'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-3",
            StepperBaseTheme::make(props: ['size' => 'xs'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default text-xs",
            StepperBaseTheme::make(props: ['size' => 'xs'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-wrap text-xs",
            StepperBaseTheme::make(props: ['size' => 'xs'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-1.5",
            StepperBaseTheme::make(props: ['size' => 'xs'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full font-medium text-center align-middle flex items-center justify-center font-semibold group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted bg-elevated focus-visible:outline-2 focus-visible:outline-offset-2 size-8 text-sm group-data-[state=completed]:bg-primary group-data-[state=active]:bg-primary focus-visible:outline-primary",
            StepperBaseTheme::make(props: ['size' => 'sm'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            StepperBaseTheme::make(props: ['size' => 'sm'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default text-xs",
            StepperBaseTheme::make(props: ['size' => 'sm'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-wrap text-xs",
            StepperBaseTheme::make(props: ['size' => 'sm'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-2",
            StepperBaseTheme::make(props: ['size' => 'sm'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full font-medium text-center align-middle flex items-center justify-center font-semibold group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted bg-elevated focus-visible:outline-2 focus-visible:outline-offset-2 size-10 text-base group-data-[state=completed]:bg-primary group-data-[state=active]:bg-primary focus-visible:outline-primary",
            StepperBaseTheme::make(props: ['size' => 'md'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            StepperBaseTheme::make(props: ['size' => 'md'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default text-sm",
            StepperBaseTheme::make(props: ['size' => 'md'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-wrap text-sm",
            StepperBaseTheme::make(props: ['size' => 'md'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-2.5",
            StepperBaseTheme::make(props: ['size' => 'md'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full font-medium text-center align-middle flex items-center justify-center font-semibold group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted bg-elevated focus-visible:outline-2 focus-visible:outline-offset-2 size-12 text-lg group-data-[state=completed]:bg-primary group-data-[state=active]:bg-primary focus-visible:outline-primary",
            StepperBaseTheme::make(props: ['size' => 'lg'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            StepperBaseTheme::make(props: ['size' => 'lg'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default text-base",
            StepperBaseTheme::make(props: ['size' => 'lg'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-wrap text-base",
            StepperBaseTheme::make(props: ['size' => 'lg'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-3",
            StepperBaseTheme::make(props: ['size' => 'lg'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full font-medium text-center align-middle flex items-center justify-center font-semibold group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted bg-elevated focus-visible:outline-2 focus-visible:outline-offset-2 size-14 text-xl group-data-[state=completed]:bg-primary group-data-[state=active]:bg-primary focus-visible:outline-primary",
            StepperBaseTheme::make(props: ['size' => 'xl'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-7",
            StepperBaseTheme::make(props: ['size' => 'xl'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default text-lg",
            StepperBaseTheme::make(props: ['size' => 'xl'], slot: 'title'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-wrap text-lg",
            StepperBaseTheme::make(props: ['size' => 'xl'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-3.5",
            StepperBaseTheme::make(props: ['size' => 'xl'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full font-medium text-center align-middle flex items-center justify-center font-semibold group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted bg-elevated focus-visible:outline-2 focus-visible:outline-offset-2 group-data-[state=completed]:bg-primary group-data-[state=active]:bg-primary focus-visible:outline-primary size-10 text-base",
            StepperBaseTheme::make(props: ['color' => 'primary'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full font-medium text-center align-middle flex items-center justify-center font-semibold group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted bg-elevated focus-visible:outline-2 focus-visible:outline-offset-2 group-data-[state=completed]:bg-secondary group-data-[state=active]:bg-secondary focus-visible:outline-secondary size-10 text-base",
            StepperBaseTheme::make(props: ['color' => 'secondary'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full group-data-[disabled]:opacity-75 bg-accented group-data-[state=completed]:bg-primary",
            StepperBaseTheme::make(props: ['color' => 'primary'], slot: 'separator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full group-data-[disabled]:opacity-75 bg-accented group-data-[state=completed]:bg-secondary",
            StepperBaseTheme::make(props: ['color' => 'secondary'], slot: 'separator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full font-medium text-center align-middle flex items-center justify-center font-semibold group-data-[state=completed]:text-inverted group-data-[state=active]:text-inverted text-muted bg-elevated focus-visible:outline-2 focus-visible:outline-offset-2 group-data-[state=completed]:bg-inverted group-data-[state=active]:bg-inverted focus-visible:outline-inverted size-10 text-base",
            StepperBaseTheme::make(props: ['color' => 'neutral'], slot: 'trigger'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute rounded-full group-data-[disabled]:opacity-75 bg-accented group-data-[state=completed]:bg-inverted",
            StepperBaseTheme::make(props: ['color' => 'neutral'], slot: 'separator'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented top-[calc(50%-2px)] h-0.5 group-data-[state=completed]:bg-primary start-[calc(50%+16px)] end-[calc(-50%+16px)]',
            StepperBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xs'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented top-[calc(50%-2px)] h-0.5 group-data-[state=completed]:bg-primary start-[calc(50%+20px)] end-[calc(-50%+20px)]',
            StepperBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'sm'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented top-[calc(50%-2px)] h-0.5 group-data-[state=completed]:bg-primary start-[calc(50%+28px)] end-[calc(-50%+28px)]',
            StepperBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'md'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented top-[calc(50%-2px)] h-0.5 group-data-[state=completed]:bg-primary start-[calc(50%+32px)] end-[calc(-50%+32px)]',
            StepperBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'lg'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented top-[calc(50%-2px)] h-0.5 group-data-[state=completed]:bg-primary start-[calc(50%+36px)] end-[calc(-50%+36px)]',
            StepperBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xl'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented start-[calc(50%-1px)] -bottom-[10px] w-0.5 group-data-[state=completed]:bg-primary top-[30px]',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xs'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group text-center relative w-full flex text-start gap-1.5',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xs'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented start-[calc(50%-1px)] -bottom-[10px] w-0.5 group-data-[state=completed]:bg-primary top-[38px]',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'sm'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group text-center relative w-full flex text-start gap-2',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'sm'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented start-[calc(50%-1px)] -bottom-[10px] w-0.5 group-data-[state=completed]:bg-primary top-[46px]',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'md'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group text-center relative w-full flex text-start gap-2.5',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'md'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented start-[calc(50%-1px)] -bottom-[10px] w-0.5 group-data-[state=completed]:bg-primary top-[54px]',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'lg'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group text-center relative w-full flex text-start gap-3',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'lg'], slot: 'item'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'absolute rounded-full group-data-[disabled]:opacity-75 bg-accented start-[calc(50%-1px)] -bottom-[10px] w-0.5 group-data-[state=completed]:bg-primary top-[62px]',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xl'], slot: 'separator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group text-center relative w-full flex text-start gap-3.5',
            StepperBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xl'], slot: 'item'),
        );
    }

}
