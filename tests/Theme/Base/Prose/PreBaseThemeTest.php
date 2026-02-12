<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\PreBaseTheme;

final class PreBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative my-5 group",
            PreBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5 border border-muted bg-default border-b-0 relative rounded-t-md px-4 py-3",
            PreBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-default text-sm/6",
            PreBaseTheme::make(slot: 'filename'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-4 shrink-0",
            PreBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute top-[11px] right-[11px] lg:opacity-0 lg:group-hover:opacity-100 transition",
            PreBaseTheme::make(slot: 'copy'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "group font-mono text-sm/6 border border-muted bg-muted rounded-md px-4 py-3 whitespace-pre-wrap break-words overflow-x-auto focus:outline-none",
            PreBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group font-mono text-sm/6 border border-muted bg-muted rounded-md px-4 py-3 whitespace-pre-wrap break-words overflow-x-auto focus:outline-none",
            PreBaseTheme::make(slot: 'base'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative my-5 group [&>pre]:rounded-t-none [&>pre]:my-0",
            PreBaseTheme::make(props: ['filename' => 'true'], slot: 'root'),
        );
    }

}
