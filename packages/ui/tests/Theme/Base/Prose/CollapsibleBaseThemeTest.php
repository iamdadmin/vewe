<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\CollapsibleBaseTheme;

final class CollapsibleBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "my-5",
            CollapsibleBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative rounded-xs inline-flex items-center gap-1.5 text-muted hover:text-default text-sm focus-visible:ring-2 focus-visible:ring-primary focus:outline-none transition-colors",
            CollapsibleBaseTheme::make(slot: 'trigger'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-4 shrink-0 group-data-[state=open]:rotate-180 transition-transform duration-200",
            CollapsibleBaseTheme::make(slot: 'triggerIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            CollapsibleBaseTheme::make(slot: 'triggerLabel'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "*:first:mt-2.5 *:last:mb-0 *:my-1.5",
            CollapsibleBaseTheme::make(slot: 'content'),
        );
    }

}
