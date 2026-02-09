<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\ThBaseTheme;

final class ThBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "py-3 px-4 font-semibold text-sm border-e border-b first:border-s border-t border-muted text-left",
            ThBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "py-3 px-4 font-semibold text-sm border-e border-b first:border-s border-t border-muted text-left",
            ThBaseTheme::make(slot: 'base'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "py-3 px-4 font-semibold text-sm border-e border-b first:border-s border-t border-muted text-left",
            ThBaseTheme::make(props: ['align' => 'left'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "py-3 px-4 font-semibold text-sm border-e border-b first:border-s border-t border-muted text-center",
            ThBaseTheme::make(props: ['align' => 'center'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "py-3 px-4 font-semibold text-sm border-e border-b first:border-s border-t border-muted text-right",
            ThBaseTheme::make(props: ['align' => 'right'], slot: 'base'),
        );
    }

}
