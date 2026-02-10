<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\CodeCollapseBaseTheme;

final class CodeCollapseBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative [&_pre]:h-[200px]",
            CodeCollapseBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "h-16 absolute inset-x-px bottom-px rounded-b-md flex items-center justify-center",
            CodeCollapseBaseTheme::make(slot: 'footer'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group",
            CodeCollapseBaseTheme::make(slot: 'trigger'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group-data-[state=open]:rotate-180",
            CodeCollapseBaseTheme::make(slot: 'triggerIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative [&_pre]:h-[200px] [&_pre]:h-auto [&_pre]:min-h-[200px] [&_pre]:max-h-[80vh] [&_pre]:pb-12",
            CodeCollapseBaseTheme::make(props: ['open' => 'true'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative [&_pre]:h-[200px] [&_pre]:overflow-hidden",
            CodeCollapseBaseTheme::make(props: ['open' => 'false'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-16 absolute inset-x-px bottom-px rounded-b-md flex items-center justify-center bg-gradient-to-t from-muted",
            CodeCollapseBaseTheme::make(props: ['open' => 'false'], slot: 'footer'),
        );
    }

}
