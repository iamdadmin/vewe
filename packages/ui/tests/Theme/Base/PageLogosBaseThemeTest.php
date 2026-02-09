<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageLogosBaseTheme;

final class PageLogosBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative overflow-hidden",
            PageLogosBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-lg text-center font-semibold text-highlighted",
            PageLogosBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-10",
            PageLogosBaseTheme::make(slot: 'logos'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-10 shrink-0",
            PageLogosBaseTheme::make(slot: 'logo'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "mt-10 flex items-center shrink-0 justify-around gap-(--gap) [--gap:--spacing(16)]",
            PageLogosBaseTheme::make(props: ['marquee' => 'false'], slot: 'logos'),
        );
    }

}
