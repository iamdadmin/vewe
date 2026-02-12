<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ModalBaseTheme;

final class ModalBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fixed inset-0",
            ModalBaseTheme::make(slot: 'overlay'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "bg-default divide-y divide-default flex flex-col focus:outline-none",
            ModalBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5 p-4 sm:px-6 min-h-16",
            ModalBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            ModalBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 p-4 sm:p-6",
            ModalBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5 p-4 sm:px-6",
            ModalBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted font-semibold",
            ModalBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-muted text-sm",
            ModalBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute top-4 end-4",
            ModalBaseTheme::make(slot: 'close'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed inset-0 data-[state=open]:animate-[fade-in_200ms_ease-out] data-[state=closed]:animate-[fade-out_200ms_ease-in]",
            ModalBaseTheme::make(props: ['transition' => 'true'], slot: 'overlay'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "bg-default divide-y divide-default flex flex-col focus:outline-none data-[state=open]:animate-[scale-in_200ms_ease-out] data-[state=closed]:animate-[scale-out_200ms_ease-in]",
            ModalBaseTheme::make(props: ['transition' => 'true'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "bg-default divide-y divide-default flex flex-col focus:outline-none inset-0",
            ModalBaseTheme::make(props: ['fullscreen' => 'true'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "bg-default divide-y divide-default flex flex-col focus:outline-none w-[calc(100vw-2rem)] max-w-lg rounded-lg shadow-lg ring ring-default",
            ModalBaseTheme::make(props: ['fullscreen' => 'false'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed inset-0 bg-elevated/75",
            ModalBaseTheme::make(props: ['overlay' => 'true'], slot: 'overlay'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed inset-0 overflow-y-auto",
            ModalBaseTheme::make(props: ['scrollable' => 'true'], slot: 'overlay'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "bg-default divide-y divide-default flex flex-col focus:outline-none relative",
            ModalBaseTheme::make(props: ['scrollable' => 'true'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "bg-default divide-y divide-default flex flex-col focus:outline-none fixed",
            ModalBaseTheme::make(props: ['scrollable' => 'false'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 p-4 sm:p-6 overflow-y-auto",
            ModalBaseTheme::make(props: ['scrollable' => 'false'], slot: 'body'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed inset-0 grid place-items-center p-4 sm:py-8',
            ModalBaseTheme::make(props: ['scrollable' => true, 'fullscreen' => false], slot: 'overlay'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'bg-default divide-y divide-default flex flex-col focus:outline-none top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 max-h-[calc(100dvh-2rem)] sm:max-h-[calc(100dvh-4rem)] overflow-hidden',
            ModalBaseTheme::make(props: ['scrollable' => false, 'fullscreen' => false], slot: 'content'),
        );
    }

}
