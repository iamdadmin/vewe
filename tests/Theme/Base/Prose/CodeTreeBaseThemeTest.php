<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\CodeTreeBaseTheme;

final class CodeTreeBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative lg:h-[450px] my-5 grid lg:grid-cols-3 border border-muted rounded-md",
            CodeTreeBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "isolate relative p-2 border-b lg:border-b-0 lg:border-e border-muted overflow-y-auto",
            CodeTreeBaseTheme::make(slot: 'list'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            CodeTreeBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ms-4.5 border-s border-default",
            CodeTreeBaseTheme::make(slot: 'listWithChildren'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ps-1.5 -ms-px",
            CodeTreeBaseTheme::make(slot: 'itemWithChildren'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative group peer w-full px-2.5 py-1.5 before:inset-y-px before:inset-x-0 flex items-center gap-1.5 text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2",
            CodeTreeBaseTheme::make(slot: 'link'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-4 shrink-0",
            CodeTreeBaseTheme::make(slot: 'linkLeadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            CodeTreeBaseTheme::make(slot: 'linkLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto inline-flex gap-1.5 items-center",
            CodeTreeBaseTheme::make(slot: 'linkTrailing'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-5 transform transition-transform duration-200 shrink-0 group-data-expanded:rotate-180",
            CodeTreeBaseTheme::make(slot: 'linkTrailingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "overflow-hidden lg:col-span-2 flex flex-col [&>div]:my-0 [&>div]:flex-1 [&>div]:flex [&>div]:flex-col [&>div>div]:border-0 [&>div>pre]:border-b-0 [&>div>pre]:border-s-0 [&>div>pre]:border-e-0 [&>div>pre]:rounded-l-none [&>div>pre]:flex-1 [&>div]:overflow-y-auto",
            CodeTreeBaseTheme::make(slot: 'content'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group peer w-full px-2.5 py-1.5 before:inset-y-px before:inset-x-0 flex items-center gap-1.5 text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 text-highlighted before:bg-elevated",
            CodeTreeBaseTheme::make(props: ['active' => 'true'], slot: 'link'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group peer w-full px-2.5 py-1.5 before:inset-y-px before:inset-x-0 flex items-center gap-1.5 text-sm before:absolute before:z-[-1] before:rounded-md focus:outline-none focus-visible:outline-none focus-visible:before:ring-inset focus-visible:before:ring-2 hover:text-highlighted hover:before:bg-elevated/50 transition-colors before:transition-colors",
            CodeTreeBaseTheme::make(props: ['active' => 'false'], slot: 'link'),
        );
    }

}
