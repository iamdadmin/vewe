<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ProgressBaseTheme;

final class ProgressBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "gap-2",
            ProgressBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "relative overflow-hidden rounded-full bg-accented",
            ProgressBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden rounded-full bg-accented",
            ProgressBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full size-full transition-transform duration-200 ease-out bg-primary",
            ProgressBaseTheme::make(slot: 'indicator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 text-sm",
            ProgressBaseTheme::make(slot: 'status'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-primary text-sm",
            ProgressBaseTheme::make(slot: 'steps'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-end row-start-1 col-start-1 transition-opacity",
            ProgressBaseTheme::make(slot: 'step'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full size-full transition-transform duration-200 ease-out bg-primary",
            ProgressBaseTheme::make(props: ['color' => 'primary'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full size-full transition-transform duration-200 ease-out bg-secondary",
            ProgressBaseTheme::make(props: ['color' => 'secondary'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-primary text-sm",
            ProgressBaseTheme::make(props: ['color' => 'primary'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-secondary text-sm",
            ProgressBaseTheme::make(props: ['color' => 'secondary'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full size-full transition-transform duration-200 ease-out bg-inverted",
            ProgressBaseTheme::make(props: ['color' => 'neutral'], slot: 'indicator'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-inverted text-sm",
            ProgressBaseTheme::make(props: ['color' => 'neutral'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 text-xs",
            ProgressBaseTheme::make(props: ['size' => '2xs'], slot: 'status'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-xs text-primary",
            ProgressBaseTheme::make(props: ['size' => '2xs'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 text-xs",
            ProgressBaseTheme::make(props: ['size' => 'xs'], slot: 'status'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-xs text-primary",
            ProgressBaseTheme::make(props: ['size' => 'xs'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 text-sm",
            ProgressBaseTheme::make(props: ['size' => 'sm'], slot: 'status'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-sm text-primary",
            ProgressBaseTheme::make(props: ['size' => 'sm'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 text-sm",
            ProgressBaseTheme::make(props: ['size' => 'md'], slot: 'status'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-sm text-primary",
            ProgressBaseTheme::make(props: ['size' => 'md'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 text-sm",
            ProgressBaseTheme::make(props: ['size' => 'lg'], slot: 'status'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-sm text-primary",
            ProgressBaseTheme::make(props: ['size' => 'lg'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 text-base",
            ProgressBaseTheme::make(props: ['size' => 'xl'], slot: 'status'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-base text-primary",
            ProgressBaseTheme::make(props: ['size' => 'xl'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 text-base",
            ProgressBaseTheme::make(props: ['size' => '2xl'], slot: 'status'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "grid items-end text-base text-primary",
            ProgressBaseTheme::make(props: ['size' => '2xl'], slot: 'steps'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-end row-start-1 col-start-1 transition-opacity opacity-100",
            ProgressBaseTheme::make(props: ['step' => 'active'], slot: 'step'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-end row-start-1 col-start-1 transition-opacity opacity-100 text-muted",
            ProgressBaseTheme::make(props: ['step' => 'first'], slot: 'step'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-end row-start-1 col-start-1 transition-opacity opacity-0",
            ProgressBaseTheme::make(props: ['step' => 'other'], slot: 'step'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "truncate text-end row-start-1 col-start-1 transition-opacity",
            ProgressBaseTheme::make(props: ['step' => 'last'], slot: 'step'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "gap-2 w-full flex flex-col",
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden rounded-full bg-accented w-full h-2",
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 flex-row items-center justify-end min-w-fit text-sm",
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'status'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "gap-2 h-full flex flex-row-reverse",
            ProgressBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden rounded-full bg-accented h-full w-2",
            ProgressBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 flex-col justify-end min-h-fit text-sm",
            ProgressBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'status'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex text-dimmed transition-[width] duration-200 self-end text-sm",
            ProgressBaseTheme::make(props: ['inverted' => 'true'], slot: 'status'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'truncate text-end row-start-1 col-start-1 transition-opacity text-start',
            ProgressBaseTheme::make(props: ['inverted' => true, 'orientation' => 'horizontal'], slot: 'step'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex text-dimmed transition-[width] duration-200 flex-row items-center justify-end min-w-fit text-sm flex-row-reverse',
            ProgressBaseTheme::make(props: ['inverted' => true, 'orientation' => 'horizontal'], slot: 'status'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'grid items-end text-primary text-sm items-start',
            ProgressBaseTheme::make(props: ['inverted' => true, 'orientation' => 'vertical'], slot: 'steps'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'flex text-dimmed transition-[width] duration-200 flex-col justify-end min-h-fit text-sm flex-col-reverse',
            ProgressBaseTheme::make(props: ['inverted' => true, 'orientation' => 'vertical'], slot: 'status'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented w-full h-px',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => '2xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented w-full h-0.5',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented w-full h-1',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented w-full h-2',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented w-full h-3',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented w-full h-4',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented w-full h-5',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => '2xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented h-full w-px',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'size' => '2xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented h-full w-0.5',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented h-full w-1',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented h-full w-2',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented h-full w-3',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented h-full w-4',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative overflow-hidden rounded-full bg-accented h-full w-5',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'size' => '2xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full size-full transition-transform duration-200 ease-out bg-primary data-[state=indeterminate]:animate-[carousel_2s_ease-in-out_infinite] data-[state=indeterminate]:rtl:animate-[carousel-rtl_2s_ease-in-out_infinite]',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'animation' => 'carousel'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full size-full transition-transform duration-200 ease-out bg-primary data-[state=indeterminate]:animate-[carousel-vertical_2s_ease-in-out_infinite]',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'animation' => 'carousel'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full size-full transition-transform duration-200 ease-out bg-primary data-[state=indeterminate]:animate-[carousel-inverse_2s_ease-in-out_infinite] data-[state=indeterminate]:rtl:animate-[carousel-inverse-rtl_2s_ease-in-out_infinite]',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'animation' => 'carousel-inverse'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full size-full transition-transform duration-200 ease-out bg-primary data-[state=indeterminate]:animate-[carousel-inverse-vertical_2s_ease-in-out_infinite]',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'animation' => 'carousel-inverse'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full size-full transition-transform duration-200 ease-out bg-primary data-[state=indeterminate]:animate-[swing_2s_ease-in-out_infinite]',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'animation' => 'swing'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full size-full transition-transform duration-200 ease-out bg-primary data-[state=indeterminate]:animate-[swing-vertical_2s_ease-in-out_infinite]',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'animation' => 'swing'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full size-full transition-transform duration-200 ease-out bg-primary data-[state=indeterminate]:animate-[elastic_2s_ease-in-out_infinite]',
            ProgressBaseTheme::make(props: ['orientation' => 'horizontal', 'animation' => 'elastic'], slot: 'indicator'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'rounded-full size-full transition-transform duration-200 ease-out bg-primary data-[state=indeterminate]:animate-[elastic-vertical_2s_ease-in-out_infinite]',
            ProgressBaseTheme::make(props: ['orientation' => 'vertical', 'animation' => 'elastic'], slot: 'indicator'),
        );
    }

}
