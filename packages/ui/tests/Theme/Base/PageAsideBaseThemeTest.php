<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\PageAsideBaseTheme;

final class PageAsideBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "hidden overflow-y-auto lg:block lg:max-h-[calc(100vh-var(--vewe-header-height))] lg:sticky lg:top-(--vewe-header-height) py-8 lg:ps-4 lg:-ms-4 lg:pe-6.5",
            PageAsideBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative",
            PageAsideBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "sticky -top-8 -mt-8 pointer-events-none z-[1]",
            PageAsideBaseTheme::make(slot: 'top'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "h-8 bg-default -mx-4 px-4",
            PageAsideBaseTheme::make(slot: 'topHeader'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "bg-default relative pointer-events-auto flex flex-col -mx-4 px-4",
            PageAsideBaseTheme::make(slot: 'topBody'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "h-8 bg-gradient-to-b from-default -mx-4 px-4",
            PageAsideBaseTheme::make(slot: 'topFooter'),
        );
    }

}
