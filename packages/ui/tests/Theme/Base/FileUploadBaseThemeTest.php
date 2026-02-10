<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\FileUploadBaseTheme;

final class FileUploadBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col",
            FileUploadBaseTheme::make(slot: 'root'),
        );

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary",
            FileUploadBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary",
            FileUploadBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col items-center justify-center text-center px-4 py-3",
            FileUploadBaseTheme::make(slot: 'wrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            FileUploadBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            FileUploadBaseTheme::make(slot: 'avatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "font-medium text-default mt-2",
            FileUploadBaseTheme::make(slot: 'label'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted mt-1",
            FileUploadBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-wrap gap-1.5 shrink-0 mt-4",
            FileUploadBaseTheme::make(slot: 'actions'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            FileUploadBaseTheme::make(slot: 'files'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "relative text-xs px-2.5 py-1.5 gap-1.5",
            FileUploadBaseTheme::make(slot: 'file'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0",
            FileUploadBaseTheme::make(slot: 'fileLeadingAvatar'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col min-w-0",
            FileUploadBaseTheme::make(slot: 'fileWrapper'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-default truncate",
            FileUploadBaseTheme::make(slot: 'fileName'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-muted truncate",
            FileUploadBaseTheme::make(slot: 'fileSize'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            FileUploadBaseTheme::make(slot: 'fileTrailingButton'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-secondary",
            FileUploadBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-inverted",
            FileUploadBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col items-center justify-center text-center px-4 py-3",
            FileUploadBaseTheme::make(props: ['variant' => 'area'], slot: 'wrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['variant' => 'area'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-sm focus-visible:outline-primary p-1.5",
            FileUploadBaseTheme::make(props: ['variant' => 'button'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-xs p-4 focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['size' => 'xs'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            FileUploadBaseTheme::make(props: ['size' => 'xs'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-xs px-2 py-1 gap-1",
            FileUploadBaseTheme::make(props: ['size' => 'xs'], slot: 'file'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col min-w-0 flex-row gap-1",
            FileUploadBaseTheme::make(props: ['size' => 'xs'], slot: 'fileWrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-xs p-4 focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['size' => 'sm'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-4",
            FileUploadBaseTheme::make(props: ['size' => 'sm'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-xs px-2.5 py-1.5 gap-1.5",
            FileUploadBaseTheme::make(props: ['size' => 'sm'], slot: 'file'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col min-w-0 flex-row gap-1",
            FileUploadBaseTheme::make(props: ['size' => 'sm'], slot: 'fileWrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-sm p-4 focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['size' => 'md'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            FileUploadBaseTheme::make(props: ['size' => 'md'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-xs px-2.5 py-1.5 gap-1.5",
            FileUploadBaseTheme::make(props: ['size' => 'md'], slot: 'file'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-sm p-4 focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['size' => 'lg'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-5",
            FileUploadBaseTheme::make(props: ['size' => 'lg'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-sm px-3 py-2 gap-2",
            FileUploadBaseTheme::make(props: ['size' => 'lg'], slot: 'file'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-muted truncate text-xs",
            FileUploadBaseTheme::make(props: ['size' => 'lg'], slot: 'fileSize'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-base p-4 focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['size' => 'xl'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-6",
            FileUploadBaseTheme::make(props: ['size' => 'xl'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative text-sm px-3 py-2 gap-2",
            FileUploadBaseTheme::make(props: ['size' => 'xl'], slot: 'file'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative flex flex-col gap-2 items-start",
            FileUploadBaseTheme::make(props: ['layout' => 'list'], slot: 'root'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col w-full gap-2",
            FileUploadBaseTheme::make(props: ['layout' => 'list'], slot: 'files'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "relative min-w-0 flex items-center border border-default rounded-md w-full text-xs px-2.5 py-1.5 gap-1.5",
            FileUploadBaseTheme::make(props: ['layout' => 'list'], slot: 'file'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "ms-auto -me-1.5",
            FileUploadBaseTheme::make(props: ['layout' => 'list'], slot: 'fileTrailingButton'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col min-w-0 hidden",
            FileUploadBaseTheme::make(props: ['layout' => 'grid'], slot: 'fileWrapper'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 size-full rounded-lg",
            FileUploadBaseTheme::make(props: ['layout' => 'grid'], slot: 'fileLeadingAvatar'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "absolute -top-1.5 -end-1.5 p-0 rounded-full border-2 border-bg",
            FileUploadBaseTheme::make(props: ['layout' => 'grid'], slot: 'fileTrailingButton'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] border-dashed data-[dragging=true]:bg-elevated/25 p-4 text-sm focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['dropzone' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['interactive' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['highlight' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['multiple' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] cursor-not-allowed opacity-75 p-4 text-sm focus-visible:outline-primary",
            FileUploadBaseTheme::make(props: ['disabled' => 'true'], slot: 'base'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary',
            FileUploadBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary border-primary',
            FileUploadBaseTheme::make(props: ['color' => 'primary', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-inverted',
            FileUploadBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-inverted border-inverted',
            FileUploadBaseTheme::make(props: ['color' => 'neutral', 'highlight' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'ms-auto -me-1',
            FileUploadBaseTheme::make(props: ['size' => 'xs', 'layout' => 'list'], slot: 'fileTrailingButton'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'ms-auto -me-1.5',
            FileUploadBaseTheme::make(props: ['size' => 'sm', 'layout' => 'list'], slot: 'fileTrailingButton'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'ms-auto -me-1.5',
            FileUploadBaseTheme::make(props: ['size' => 'md', 'layout' => 'list'], slot: 'fileTrailingButton'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'ms-auto -me-2',
            FileUploadBaseTheme::make(props: ['size' => 'lg', 'layout' => 'list'], slot: 'fileTrailingButton'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'ms-auto -me-2',
            FileUploadBaseTheme::make(props: ['size' => 'xl', 'layout' => 'list'], slot: 'fileTrailingButton'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-xs focus-visible:outline-primary p-1',
            FileUploadBaseTheme::make(props: ['variant' => 'button', 'size' => 'xs'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-xs focus-visible:outline-primary p-1.5',
            FileUploadBaseTheme::make(props: ['variant' => 'button', 'size' => 'sm'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-sm focus-visible:outline-primary p-1.5',
            FileUploadBaseTheme::make(props: ['variant' => 'button', 'size' => 'md'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-sm focus-visible:outline-primary p-2',
            FileUploadBaseTheme::make(props: ['variant' => 'button', 'size' => 'lg'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] text-base focus-visible:outline-primary p-2',
            FileUploadBaseTheme::make(props: ['variant' => 'button', 'size' => 'xl'], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'grid grid-cols-2 md:grid-cols-3 gap-4 w-full',
            FileUploadBaseTheme::make(props: ['layout' => 'grid', 'multiple' => true], slot: 'files'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-xs px-2.5 py-1.5 gap-1.5 p-0 aspect-square',
            FileUploadBaseTheme::make(props: ['layout' => 'grid', 'multiple' => true], slot: 'file'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'relative text-xs px-2.5 py-1.5 gap-1.5 absolute inset-0 p-0',
            FileUploadBaseTheme::make(props: ['layout' => 'grid', 'multiple' => false], slot: 'file'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'w-full flex-1 bg-default border border-default flex flex-col gap-2 items-stretch justify-center rounded-lg focus-visible:outline-2 transition-[background] p-4 text-sm focus-visible:outline-primary hover:bg-elevated/25',
            FileUploadBaseTheme::make(props: ['interactive' => true, 'disabled' => false], slot: 'base'),
        );
    }

}
