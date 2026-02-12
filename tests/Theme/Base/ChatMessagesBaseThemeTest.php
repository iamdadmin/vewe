<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ChatMessagesBaseTheme;

final class ChatMessagesBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex flex-col gap-1 flex-1 px-2.5 [&>article]:last-of-type:min-h-(--last-message-height)",
            ChatMessagesBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "h-6 flex items-center gap-1 py-3 *:size-2 *:rounded-full *:bg-elevated [&>*:nth-child(1)]:animate-[bounce_1s_infinite] [&>*:nth-child(2)]:animate-[bounce_1s_0.15s_infinite] [&>*:nth-child(3)]:animate-[bounce_1s_0.3s_infinite]",
            ChatMessagesBaseTheme::make(slot: 'indicator'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "absolute inset-x-0 top-[86%] data-[state=open]:animate-[fade-in_200ms_ease-out] data-[state=closed]:animate-[fade-out_200ms_ease-in]",
            ChatMessagesBaseTheme::make(slot: 'viewport'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "rounded-full absolute right-1/2 translate-x-1/2 bottom-0",
            ChatMessagesBaseTheme::make(slot: 'autoScroll'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            ChatMessagesBaseTheme::make(props: ['compact' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "",
            ChatMessagesBaseTheme::make(props: ['compact' => 'false'], slot: 'base'),
        );
    }

}
