<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PaginationBaseTheme;

final class PaginationBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PaginationBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1",
            PaginationBaseTheme::make(slot: 'list'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "pointer-events-none",
            PaginationBaseTheme::make(slot: 'ellipsis'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "min-w-5 text-center",
            PaginationBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PaginationBaseTheme::make(slot: 'first'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PaginationBaseTheme::make(slot: 'prev'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PaginationBaseTheme::make(slot: 'item'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PaginationBaseTheme::make(slot: 'next'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            PaginationBaseTheme::make(slot: 'last'),
        );
    }

}
