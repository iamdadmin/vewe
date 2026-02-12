<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\ABaseTheme;

final class ABaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "text-primary border-b border-transparent hover:border-primary font-medium focus-visible:outline-primary focus-visible:has-[>code]:outline-0 [&>code]:border-dashed hover:[&>code]:border-primary hover:[&>code]:text-primary focus-visible:[&>code]:border-primary focus-visible:[&>code]:text-primary transition-colors [&>code]:transition-colors",
            ABaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-primary border-b border-transparent hover:border-primary font-medium focus-visible:outline-primary focus-visible:has-[>code]:outline-0 [&>code]:border-dashed hover:[&>code]:border-primary hover:[&>code]:text-primary focus-visible:[&>code]:border-primary focus-visible:[&>code]:text-primary transition-colors [&>code]:transition-colors",
            ABaseTheme::make(slot: 'base'),
        );
    }

}
