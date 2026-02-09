<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ErrorBaseTheme;

final class ErrorBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "min-h-[calc(100vh-var(--vewe-header-height))] flex flex-col items-center justify-center text-center",
            ErrorBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-base font-semibold text-primary",
            ErrorBaseTheme::make(slot: 'statusCode'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-2 text-4xl sm:text-5xl font-bold text-highlighted text-balance",
            ErrorBaseTheme::make(slot: 'statusMessage'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-4 text-lg text-muted text-balance",
            ErrorBaseTheme::make(slot: 'message'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-8 flex items-center justify-center gap-6",
            ErrorBaseTheme::make(slot: 'links'),
        );
    }

}
