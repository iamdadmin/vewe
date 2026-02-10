<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\SlideoverBaseTheme;

final class SlideoverBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fixed inset-0 bg-elevated/75",
            SlideoverBaseTheme::make(slot: 'overlay'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none",
            SlideoverBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5 p-4 sm:px-6 min-h-16",
            SlideoverBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            SlideoverBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 overflow-y-auto p-4 sm:p-6",
            SlideoverBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5 p-4 sm:px-6",
            SlideoverBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted font-semibold",
            SlideoverBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-muted text-sm",
            SlideoverBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute top-4 end-4",
            SlideoverBaseTheme::make(slot: 'close'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none",
            SlideoverBaseTheme::make(props: ['side' => 'top'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-w-md",
            SlideoverBaseTheme::make(props: ['side' => 'right'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none",
            SlideoverBaseTheme::make(props: ['side' => 'bottom'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-w-md",
            SlideoverBaseTheme::make(props: ['side' => 'left'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none rounded-lg",
            SlideoverBaseTheme::make(props: ['inset' => 'true'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed inset-0 bg-elevated/75 data-[state=open]:animate-[fade-in_200ms_ease-out] data-[state=closed]:animate-[fade-out_200ms_ease-in]",
            SlideoverBaseTheme::make(props: ['transition' => 'true'], slot: 'overlay'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-h-[calc(100%-2rem)] inset-x-4 top-4',
            SlideoverBaseTheme::make(props: ['side' => 'top', 'inset' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-h-full inset-x-0 top-0',
            SlideoverBaseTheme::make(props: ['side' => 'top', 'inset' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-w-md w-[calc(100%-2rem)] inset-y-4 right-4',
            SlideoverBaseTheme::make(props: ['side' => 'right', 'inset' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-w-md w-full inset-y-0 right-0',
            SlideoverBaseTheme::make(props: ['side' => 'right', 'inset' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-h-[calc(100%-2rem)] inset-x-4 bottom-4',
            SlideoverBaseTheme::make(props: ['side' => 'bottom', 'inset' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-h-full inset-x-0 bottom-0',
            SlideoverBaseTheme::make(props: ['side' => 'bottom', 'inset' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-w-md w-[calc(100%-2rem)] inset-y-4 left-4',
            SlideoverBaseTheme::make(props: ['side' => 'left', 'inset' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-w-md w-full inset-y-0 left-0',
            SlideoverBaseTheme::make(props: ['side' => 'left', 'inset' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none data-[state=open]:animate-[slide-in-from-top_200ms_ease-in-out] data-[state=closed]:animate-[slide-out-to-top_200ms_ease-in-out]',
            SlideoverBaseTheme::make(props: ['transition' => true, 'side' => 'top'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-w-md data-[state=open]:animate-[slide-in-from-right_200ms_ease-in-out] data-[state=closed]:animate-[slide-out-to-right_200ms_ease-in-out]',
            SlideoverBaseTheme::make(props: ['transition' => true, 'side' => 'right'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none data-[state=open]:animate-[slide-in-from-bottom_200ms_ease-in-out] data-[state=closed]:animate-[slide-out-to-bottom_200ms_ease-in-out]',
            SlideoverBaseTheme::make(props: ['transition' => true, 'side' => 'bottom'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default divide-y divide-default sm:ring ring-default sm:shadow-lg flex flex-col focus:outline-none max-w-md data-[state=open]:animate-[slide-in-from-left_200ms_ease-in-out] data-[state=closed]:animate-[slide-out-to-left_200ms_ease-in-out]',
            SlideoverBaseTheme::make(props: ['transition' => true, 'side' => 'left'], slot: 'content'),
        );
    }

}
