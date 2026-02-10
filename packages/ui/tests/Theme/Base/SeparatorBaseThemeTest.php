<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\SeparatorBaseTheme;

final class SeparatorBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center align-center text-center",
            SeparatorBaseTheme::make(slot: 'root'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "border-default border-solid",
            SeparatorBaseTheme::make(slot: 'border'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default flex",
            SeparatorBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            SeparatorBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            SeparatorBaseTheme::make(slot: 'avatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "2xs",
            SeparatorBaseTheme::make(slot: 'avatarSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-sm",
            SeparatorBaseTheme::make(slot: 'label'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-primary border-solid",
            SeparatorBaseTheme::make(props: ['color' => 'primary'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-secondary border-solid",
            SeparatorBaseTheme::make(props: ['color' => 'secondary'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-default border-solid",
            SeparatorBaseTheme::make(props: ['color' => 'neutral'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center align-center text-center w-full flex-row",
            SeparatorBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full border-default border-solid border-t",
            SeparatorBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default flex mx-3 whitespace-nowrap",
            SeparatorBaseTheme::make(props: ['orientation' => 'horizontal'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex items-center align-center text-center h-full flex-col",
            SeparatorBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "h-full border-default border-solid border-s",
            SeparatorBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default flex my-2",
            SeparatorBaseTheme::make(props: ['orientation' => 'vertical'], slot: 'container'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-default border-solid",
            SeparatorBaseTheme::make(props: ['size' => 'xs'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-default border-solid",
            SeparatorBaseTheme::make(props: ['size' => 'sm'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-default border-solid",
            SeparatorBaseTheme::make(props: ['size' => 'md'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-default border-solid",
            SeparatorBaseTheme::make(props: ['size' => 'lg'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-default border-solid",
            SeparatorBaseTheme::make(props: ['size' => 'xl'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-solid border-default",
            SeparatorBaseTheme::make(props: ['type' => 'solid'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-dashed border-default",
            SeparatorBaseTheme::make(props: ['type' => 'dashed'], slot: 'border'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "border-dotted border-default",
            SeparatorBaseTheme::make(props: ['type' => 'dotted'], slot: 'border'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full border-default border-solid border-t',
            SeparatorBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xs'], slot: 'border'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full border-default border-solid border-t-[2px]',
            SeparatorBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'sm'], slot: 'border'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full border-default border-solid border-t-[3px]',
            SeparatorBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'md'], slot: 'border'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full border-default border-solid border-t-[4px]',
            SeparatorBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'lg'], slot: 'border'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full border-default border-solid border-t-[5px]',
            SeparatorBaseTheme::make(props: ['orientation' => 'horizontal', 'size' => 'xl'], slot: 'border'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-full border-default border-solid border-s',
            SeparatorBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xs'], slot: 'border'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-full border-default border-solid border-s-[2px]',
            SeparatorBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'sm'], slot: 'border'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-full border-default border-solid border-s-[3px]',
            SeparatorBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'md'], slot: 'border'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-full border-default border-solid border-s-[4px]',
            SeparatorBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'lg'], slot: 'border'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'h-full border-default border-solid border-s-[5px]',
            SeparatorBaseTheme::make(props: ['orientation' => 'vertical', 'size' => 'xl'], slot: 'border'),
        );
    }

}
