<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\FieldBaseTheme;

final class FieldBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "my-5",
            FieldBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-3 font-mono text-sm",
            FieldBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-semibold text-primary",
            FieldBaseTheme::make(slot: 'name'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1 flex items-center gap-1.5 text-xs",
            FieldBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm bg-error/10 text-error px-1.5 py-0.5",
            FieldBaseTheme::make(slot: 'required'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-sm bg-elevated text-toned px-1.5 py-0.5",
            FieldBaseTheme::make(slot: 'type'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-3 text-muted text-sm [&_code]:text-xs/4",
            FieldBaseTheme::make(slot: 'description'),
        );
    }

}
