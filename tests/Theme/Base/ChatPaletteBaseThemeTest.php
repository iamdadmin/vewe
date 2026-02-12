<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ChatPaletteBaseTheme;

final class ChatPaletteBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex-1 flex flex-col min-h-0 min-w-0",
            ChatPaletteBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "px-0 rounded-t-none border-t border-default",
            ChatPaletteBaseTheme::make(slot: 'prompt'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            ChatPaletteBaseTheme::make(slot: 'close'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "overflow-y-auto flex-1 flex flex-col py-3",
            ChatPaletteBaseTheme::make(slot: 'content'),
        );
    }

}
