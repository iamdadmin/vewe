<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\AccordionBaseTheme;

final class AccordionBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full",
            AccordionBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "border-b border-default last:border-b-0",
            AccordionBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex",
            AccordionBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group flex-1 flex items-center gap-1.5 font-medium text-sm py-3.5 focus-visible:outline-primary min-w-0",
            AccordionBaseTheme::make(slot: 'trigger'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "data-[state=open]:animate-[accordion-down_200ms_ease-out] data-[state=closed]:animate-[accordion-up_200ms_ease-out] overflow-hidden focus:outline-none",
            AccordionBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm pb-3.5",
            AccordionBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            AccordionBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5 ms-auto group-data-[state=open]:rotate-180 transition-transform duration-200",
            AccordionBaseTheme::make(slot: 'trailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-start break-words",
            AccordionBaseTheme::make(slot: 'label'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group flex-1 flex items-center gap-1.5 font-medium text-sm py-3.5 focus-visible:outline-primary min-w-0 cursor-not-allowed opacity-75",
            AccordionBaseTheme::make(props: ['disabled' => 'true'], slot: 'trigger'),
        );
    }

}
