<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\H1BaseTheme;

final class H1BaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "text-4xl text-highlighted font-bold mb-8 scroll-mt-[calc(45px+var(--vewe-header-height))] lg:scroll-mt-(--vewe-header-height)",
            H1BaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-4xl text-highlighted font-bold mb-8 scroll-mt-[calc(45px+var(--vewe-header-height))] lg:scroll-mt-(--vewe-header-height)",
            H1BaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center gap-2",
            H1BaseTheme::make(slot: 'link'),
        );
    }

}
