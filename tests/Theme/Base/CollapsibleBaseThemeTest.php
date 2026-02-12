<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\CollapsibleBaseTheme;

final class CollapsibleBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            CollapsibleBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "data-[state=open]:animate-[collapsible-down_200ms_ease-out] data-[state=closed]:animate-[collapsible-up_200ms_ease-out] overflow-hidden",
            CollapsibleBaseTheme::make(slot: 'content'),
        );
    }

}
