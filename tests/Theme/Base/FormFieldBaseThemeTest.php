<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\FormFieldBaseTheme;

final class FormFieldBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm",
            FormFieldBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            FormFieldBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex content-center items-center justify-between gap-1",
            FormFieldBaseTheme::make(slot: 'labelWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default",
            FormFieldBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative mt-1",
            FormFieldBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted",
            FormFieldBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-2 text-error",
            FormFieldBaseTheme::make(slot: 'error'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted",
            FormFieldBaseTheme::make(slot: 'hint'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-2 text-muted",
            FormFieldBaseTheme::make(slot: 'help'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-xs",
            FormFieldBaseTheme::make(props: ['size' => 'xs'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-xs",
            FormFieldBaseTheme::make(props: ['size' => 'sm'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm",
            FormFieldBaseTheme::make(props: ['size' => 'md'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-sm",
            FormFieldBaseTheme::make(props: ['size' => 'lg'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-base",
            FormFieldBaseTheme::make(props: ['size' => 'xl'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "block font-medium text-default after:content-['*'] after:ms-0.5 after:text-error",
            FormFieldBaseTheme::make(props: ['required' => 'true'], slot: 'label'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative mt-1",
            FormFieldBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex justify-between place-items-baseline gap-2 text-sm",
            FormFieldBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );
    }

}
