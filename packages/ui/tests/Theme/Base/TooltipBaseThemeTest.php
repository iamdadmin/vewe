<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\TooltipBaseTheme;

final class TooltipBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1 bg-default text-highlighted shadow-sm rounded-sm ring ring-default h-6 px-2.5 py-1 text-xs select-none data-[state=delayed-open]:animate-[scale-in_100ms_ease-out] data-[state=closed]:animate-[scale-out_100ms_ease-in] origin-(--reka-tooltip-content-transform-origin) pointer-events-auto",
            TooltipBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fill-default",
            TooltipBaseTheme::make(slot: 'arrow'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "truncate",
            TooltipBaseTheme::make(slot: 'text'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "hidden lg:inline-flex items-center shrink-0 gap-0.5 not-first-of-type:before:content-['·'] not-first-of-type:before:me-0.5",
            TooltipBaseTheme::make(slot: 'kbds'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "sm",
            TooltipBaseTheme::make(slot: 'kbdsSize'),
        );
    }

}
