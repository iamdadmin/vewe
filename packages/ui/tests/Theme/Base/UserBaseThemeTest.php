<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\UserBaseTheme;

final class UserBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-2",
            UserBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            UserBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-sm",
            UserBaseTheme::make(slot: 'name'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-xs",
            UserBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            UserBaseTheme::make(slot: 'avatar'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user flex items-center gap-2",
            UserBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user flex flex-col gap-2",
            UserBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default peer-hover:text-highlighted peer-focus-visible:text-highlighted transition-colors text-sm",
            UserBaseTheme::make(props: ['to' => 'true'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted peer-hover:text-toned peer-focus-visible:text-toned transition-colors text-xs",
            UserBaseTheme::make(props: ['to' => 'true'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 transform transition-transform duration-200 group-hover/user:scale-115 group-has-focus-visible/user:scale-115",
            UserBaseTheme::make(props: ['to' => 'true'], slot: 'avatar'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-highlighted text-sm",
            UserBaseTheme::make(props: ['to' => 'false'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-xs",
            UserBaseTheme::make(props: ['to' => 'false'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-1",
            UserBaseTheme::make(props: ['size' => '3xs'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1",
            UserBaseTheme::make(props: ['size' => '3xs'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-xs",
            UserBaseTheme::make(props: ['size' => '3xs'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-xs",
            UserBaseTheme::make(props: ['size' => '3xs'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-1.5",
            UserBaseTheme::make(props: ['size' => '2xs'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5",
            UserBaseTheme::make(props: ['size' => '2xs'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-xs",
            UserBaseTheme::make(props: ['size' => '2xs'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-xs",
            UserBaseTheme::make(props: ['size' => '2xs'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-1.5",
            UserBaseTheme::make(props: ['size' => 'xs'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center gap-1.5",
            UserBaseTheme::make(props: ['size' => 'xs'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-xs",
            UserBaseTheme::make(props: ['size' => 'xs'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-xs",
            UserBaseTheme::make(props: ['size' => 'xs'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-2",
            UserBaseTheme::make(props: ['size' => 'sm'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-xs",
            UserBaseTheme::make(props: ['size' => 'sm'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-xs",
            UserBaseTheme::make(props: ['size' => 'sm'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-2",
            UserBaseTheme::make(props: ['size' => 'md'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-sm",
            UserBaseTheme::make(props: ['size' => 'md'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-xs",
            UserBaseTheme::make(props: ['size' => 'md'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-2.5",
            UserBaseTheme::make(props: ['size' => 'lg'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-sm",
            UserBaseTheme::make(props: ['size' => 'lg'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-sm",
            UserBaseTheme::make(props: ['size' => 'lg'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-2.5",
            UserBaseTheme::make(props: ['size' => 'xl'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-base",
            UserBaseTheme::make(props: ['size' => 'xl'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-sm",
            UserBaseTheme::make(props: ['size' => 'xl'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-3",
            UserBaseTheme::make(props: ['size' => '2xl'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-base",
            UserBaseTheme::make(props: ['size' => '2xl'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-base",
            UserBaseTheme::make(props: ['size' => '2xl'], slot: 'description'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative group/user gap-3",
            UserBaseTheme::make(props: ['size' => '3xl'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-lg",
            UserBaseTheme::make(props: ['size' => '3xl'], slot: 'name'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted text-base",
            UserBaseTheme::make(props: ['size' => '3xl'], slot: 'description'),
        );
    }

}
