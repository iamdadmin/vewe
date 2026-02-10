<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\ChatMessageBaseTheme;

final class ChatMessageBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group/message relative w-full",
            ChatMessageBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start",
            ChatMessageBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "inline-flex items-center justify-center min-h-6",
            ChatMessageBaseTheme::make(slot: 'leading'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            ChatMessageBaseTheme::make(slot: 'leadingIcon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            ChatMessageBaseTheme::make(slot: 'leadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            ChatMessageBaseTheme::make(slot: 'leadingAvatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0",
            ChatMessageBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "opacity-0 group-hover/message:opacity-100 absolute bottom-0 flex items-center transition-opacity",
            ChatMessageBaseTheme::make(slot: 'actions'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-inverted text-inverted",
            ChatMessageBaseTheme::make(props: ['variant' => 'solid'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-default ring ring-default",
            ChatMessageBaseTheme::make(props: ['variant' => 'outline'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-elevated/50",
            ChatMessageBaseTheme::make(props: ['variant' => 'soft'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-elevated/50 ring ring-default",
            ChatMessageBaseTheme::make(props: ['variant' => 'subtle'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0",
            ChatMessageBaseTheme::make(props: ['variant' => 'naked'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start rtl:justify-end",
            ChatMessageBaseTheme::make(props: ['side' => 'left'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start ltr:justify-end ms-auto max-w-[75%]",
            ChatMessageBaseTheme::make(props: ['side' => 'right'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group/message relative w-full",
            ChatMessageBaseTheme::make(props: ['leading' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group/message relative w-full",
            ChatMessageBaseTheme::make(props: ['actions' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group/message relative w-full scroll-mt-3",
            ChatMessageBaseTheme::make(props: ['compact' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start gap-1.5 pb-3",
            ChatMessageBaseTheme::make(props: ['compact' => 'true'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            ChatMessageBaseTheme::make(props: ['compact' => 'true'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            ChatMessageBaseTheme::make(props: ['compact' => 'true'], slot: 'leadingAvatarSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group/message relative w-full scroll-mt-4 sm:scroll-mt-6",
            ChatMessageBaseTheme::make(props: ['compact' => 'false'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex items-start gap-3 pb-8",
            ChatMessageBaseTheme::make(props: ['compact' => 'false'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-8",
            ChatMessageBaseTheme::make(props: ['compact' => 'false'], slot: 'leadingIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "md",
            ChatMessageBaseTheme::make(props: ['compact' => 'false'], slot: 'leadingAvatarSize'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative flex items-start pb-8',
            ChatMessageBaseTheme::make(props: ['compact' => true, 'actions' => true], slot: 'container'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'opacity-0 group-hover/message:opacity-100 absolute bottom-0 flex items-center transition-opacity left-11',
            ChatMessageBaseTheme::make(props: ['leading' => true, 'compact' => false, 'side' => 'left'], slot: 'actions'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'opacity-0 group-hover/message:opacity-100 absolute bottom-0 flex items-center transition-opacity left-6.5',
            ChatMessageBaseTheme::make(props: ['leading' => true, 'compact' => true, 'side' => 'left'], slot: 'actions'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-inverted text-inverted px-4 py-3 rounded-lg min-h-12',
            ChatMessageBaseTheme::make(props: ['variant' => 'solid', 'compact' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'inline-flex items-center justify-center min-h-6 mt-2',
            ChatMessageBaseTheme::make(props: ['variant' => 'solid', 'compact' => false], slot: 'leading'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-default ring ring-default px-4 py-3 rounded-lg min-h-12',
            ChatMessageBaseTheme::make(props: ['variant' => 'outline', 'compact' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'inline-flex items-center justify-center min-h-6 mt-2',
            ChatMessageBaseTheme::make(props: ['variant' => 'outline', 'compact' => false], slot: 'leading'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-elevated/50 px-4 py-3 rounded-lg min-h-12',
            ChatMessageBaseTheme::make(props: ['variant' => 'soft', 'compact' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'inline-flex items-center justify-center min-h-6 mt-2',
            ChatMessageBaseTheme::make(props: ['variant' => 'soft', 'compact' => false], slot: 'leading'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-elevated/50 ring ring-default px-4 py-3 rounded-lg min-h-12',
            ChatMessageBaseTheme::make(props: ['variant' => 'subtle', 'compact' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'inline-flex items-center justify-center min-h-6 mt-2',
            ChatMessageBaseTheme::make(props: ['variant' => 'subtle', 'compact' => false], slot: 'leading'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-inverted text-inverted px-2 py-1 rounded-lg min-h-8',
            ChatMessageBaseTheme::make(props: ['variant' => 'solid', 'compact' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'inline-flex items-center justify-center min-h-6 mt-1',
            ChatMessageBaseTheme::make(props: ['variant' => 'solid', 'compact' => true], slot: 'leading'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-default ring ring-default px-2 py-1 rounded-lg min-h-8',
            ChatMessageBaseTheme::make(props: ['variant' => 'outline', 'compact' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'inline-flex items-center justify-center min-h-6 mt-1',
            ChatMessageBaseTheme::make(props: ['variant' => 'outline', 'compact' => true], slot: 'leading'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-elevated/50 px-2 py-1 rounded-lg min-h-8',
            ChatMessageBaseTheme::make(props: ['variant' => 'soft', 'compact' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'inline-flex items-center justify-center min-h-6 mt-1',
            ChatMessageBaseTheme::make(props: ['variant' => 'soft', 'compact' => true], slot: 'leading'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 bg-elevated/50 ring ring-default px-2 py-1 rounded-lg min-h-8',
            ChatMessageBaseTheme::make(props: ['variant' => 'subtle', 'compact' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'inline-flex items-center justify-center min-h-6 mt-1',
            ChatMessageBaseTheme::make(props: ['variant' => 'subtle', 'compact' => true], slot: 'leading'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-pretty min-w-0 *:first:mt-0 *:last:mb-0 w-full',
            ChatMessageBaseTheme::make(props: ['variant' => 'naked', 'side' => 'left'], slot: 'content'),
        );
    }

}
