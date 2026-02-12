<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\TableBaseTheme;

final class TableBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-auto",
            TableBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "min-w-full",
            TableBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "min-w-full",
            TableBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "sr-only",
            TableBaseTheme::make(slot: 'caption'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            TableBaseTheme::make(slot: 'thead'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "isolate [&>tr]:data-[selectable=true]:hover:bg-elevated/50 [&>tr]:data-[selectable=true]:focus-visible:outline-primary",
            TableBaseTheme::make(slot: 'tbody'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            TableBaseTheme::make(slot: 'tfoot'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "data-[selected=true]:bg-elevated/50",
            TableBaseTheme::make(slot: 'tr'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "px-4 py-3.5 text-sm text-highlighted text-left rtl:text-right font-semibold [&:has([role=checkbox])]:pe-0",
            TableBaseTheme::make(slot: 'th'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "p-4 text-sm text-muted whitespace-nowrap [&:has([role=checkbox])]:pe-0",
            TableBaseTheme::make(slot: 'td'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute z-1 left-0 w-full h-px bg-(--vewe-border-accented)",
            TableBaseTheme::make(slot: 'separator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "py-6 text-center text-sm text-muted",
            TableBaseTheme::make(slot: 'empty'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "py-6 text-center",
            TableBaseTheme::make(slot: 'loading'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-full overflow-clip",
            TableBaseTheme::make(props: ['virtualize' => 'false'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "isolate [&>tr]:data-[selectable=true]:hover:bg-elevated/50 [&>tr]:data-[selectable=true]:focus-visible:outline-primary divide-y divide-default",
            TableBaseTheme::make(props: ['virtualize' => 'false'], slot: 'tbody'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "px-4 py-3.5 text-sm text-highlighted text-left rtl:text-right font-semibold [&:has([role=checkbox])]:pe-0 sticky bg-default/75 z-1",
            TableBaseTheme::make(props: ['pinned' => 'true'], slot: 'th'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "p-4 text-sm text-muted whitespace-nowrap [&:has([role=checkbox])]:pe-0 sticky bg-default/75 z-1",
            TableBaseTheme::make(props: ['pinned' => 'true'], slot: 'td'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative sticky top-0 inset-x-0 bg-default/75 backdrop-blur z-1",
            TableBaseTheme::make(props: ['sticky' => 'true'], slot: 'thead'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative sticky bottom-0 inset-x-0 bg-default/75 backdrop-blur z-1",
            TableBaseTheme::make(props: ['sticky' => 'true'], slot: 'tfoot'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative sticky top-0 inset-x-0 bg-default/75 backdrop-blur z-1",
            TableBaseTheme::make(props: ['sticky' => 'header'], slot: 'thead'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative sticky bottom-0 inset-x-0 bg-default/75 backdrop-blur z-1",
            TableBaseTheme::make(props: ['sticky' => 'footer'], slot: 'tfoot'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative after:absolute after:z-1 after:h-px",
            TableBaseTheme::make(props: ['loading' => 'true'], slot: 'thead'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-full",
            TableBaseTheme::make(props: ['loadingAnimation' => 'carousel'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-full",
            TableBaseTheme::make(props: ['loadingAnimation' => 'carousel-inverse'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-full",
            TableBaseTheme::make(props: ['loadingAnimation' => 'swing'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-full",
            TableBaseTheme::make(props: ['loadingAnimation' => 'elastic'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-full",
            TableBaseTheme::make(props: ['loadingColor' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "min-w-full",
            TableBaseTheme::make(props: ['loadingColor' => 'neutral'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative after:bg-primary after:animate-[carousel_2s_ease-in-out_infinite] rtl:after:animate-[carousel-rtl_2s_ease-in-out_infinite]',
            TableBaseTheme::make(props: ['loading' => true, 'loadingColor' => 'primary'], slot: 'thead'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative after:bg-inverted after:animate-[carousel_2s_ease-in-out_infinite] rtl:after:animate-[carousel-rtl_2s_ease-in-out_infinite]',
            TableBaseTheme::make(props: ['loading' => true, 'loadingColor' => 'neutral'], slot: 'thead'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative after:bg-primary after:animate-[carousel_2s_ease-in-out_infinite] rtl:after:animate-[carousel-rtl_2s_ease-in-out_infinite]',
            TableBaseTheme::make(props: ['loading' => true, 'loadingAnimation' => 'carousel'], slot: 'thead'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative after:bg-primary after:animate-[carousel-inverse_2s_ease-in-out_infinite] rtl:after:animate-[carousel-inverse-rtl_2s_ease-in-out_infinite]',
            TableBaseTheme::make(props: ['loading' => true, 'loadingAnimation' => 'carousel-inverse'], slot: 'thead'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative after:bg-primary after:animate-[swing_2s_ease-in-out_infinite]',
            TableBaseTheme::make(props: ['loading' => true, 'loadingAnimation' => 'swing'], slot: 'thead'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative after:bg-primary after:animate-[elastic_2s_ease-in-out_infinite]',
            TableBaseTheme::make(props: ['loading' => true, 'loadingAnimation' => 'elastic'], slot: 'thead'),
        );
    }

}
