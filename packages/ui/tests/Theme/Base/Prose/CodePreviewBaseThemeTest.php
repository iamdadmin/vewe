<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\CodePreviewBaseTheme;

final class CodePreviewBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "my-5",
            CodePreviewBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex justify-center border border-muted relative p-4 rounded-md",
            CodePreviewBaseTheme::make(slot: 'preview'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "[&>div>pre]:rounded-t-none [&>div]:my-0",
            CodePreviewBaseTheme::make(slot: 'code'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex justify-center border border-muted relative p-4 rounded-md border-b-0 rounded-b-none",
            CodePreviewBaseTheme::make(props: ['code' => 'true'], slot: 'preview'),
        );
    }

}
