<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\H4BaseTheme;

final class H4BaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "text-lg text-highlighted font-bold mt-6 mb-2 scroll-mt-[calc(24px+45px+var(--vewe-header-height))] lg:scroll-mt-[calc(24px+var(--vewe-header-height))] [&>a]:focus-visible:outline-primary",
            H4BaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-lg text-highlighted font-bold mt-6 mb-2 scroll-mt-[calc(24px+45px+var(--vewe-header-height))] lg:scroll-mt-[calc(24px+var(--vewe-header-height))] [&>a]:focus-visible:outline-primary",
            H4BaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            H4BaseTheme::make(slot: 'link'),
        );
    }

}
