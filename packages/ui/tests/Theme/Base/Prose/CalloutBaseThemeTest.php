<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\CalloutBaseTheme;

final class CalloutBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "group relative block px-4 py-3 rounded-md text-sm/6 my-5 last:mb-0 [&_code]:text-xs/5 [&_code]:bg-default [&_pre]:bg-default [&>div]:my-2.5 [&_ul]:my-2.5 [&_ol]:my-2.5 [&>*]:last:!mb-0 [&_ul]:ps-4.5 [&_ol]:ps-4.5 [&_li]:my-0 transition-colors border border-muted bg-muted text-default",
            CalloutBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative block px-4 py-3 rounded-md text-sm/6 my-5 last:mb-0 [&_code]:text-xs/5 [&_code]:bg-default [&_pre]:bg-default [&>div]:my-2.5 [&_ul]:my-2.5 [&_ol]:my-2.5 [&>*]:last:!mb-0 [&_ul]:ps-4.5 [&_ol]:ps-4.5 [&_li]:my-0 transition-colors border border-muted bg-muted text-default",
            CalloutBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-4 shrink-0 align-sub me-1.5 inline-block transition-colors text-highlighted",
            CalloutBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-4 align-top absolute right-2 top-2 pointer-events-none transition-colors text-dimmed",
            CalloutBaseTheme::make(slot: 'externalIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative block px-4 py-3 rounded-md text-sm/6 my-5 last:mb-0 [&_code]:text-xs/5 [&_code]:bg-default [&_pre]:bg-default [&>div]:my-2.5 [&_ul]:my-2.5 [&_ol]:my-2.5 [&>*]:last:!mb-0 [&_ul]:ps-4.5 [&_ol]:ps-4.5 [&_li]:my-0 transition-colors border border-primary/25 bg-primary/10 text-primary-600 dark:text-primary-300 [&_a]:text-primary [&_a]:hover:border-primary [&_a]:focus-visible:outline-primary [&_code]:text-primary-600 dark:[&_code]:text-primary-300 [&_code]:border-primary/25 [&_a]:hover:[&>code]:border-primary [&_a]:hover:[&>code]:text-primary [&_a]:focus-visible:[&>code]:border-primary [&_a]:focus-visible:[&>code]:text-primary [&>ul]:marker:text-primary/50",
            CalloutBaseTheme::make(props: ['color' => 'primary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative block px-4 py-3 rounded-md text-sm/6 my-5 last:mb-0 [&_code]:text-xs/5 [&_code]:bg-default [&_pre]:bg-default [&>div]:my-2.5 [&_ul]:my-2.5 [&_ol]:my-2.5 [&>*]:last:!mb-0 [&_ul]:ps-4.5 [&_ol]:ps-4.5 [&_li]:my-0 transition-colors border border-secondary/25 bg-secondary/10 text-secondary-600 dark:text-secondary-300 [&_a]:text-secondary [&_a]:hover:border-secondary [&_a]:focus-visible:outline-secondary [&_code]:text-secondary-600 dark:[&_code]:text-secondary-300 [&_code]:border-secondary/25 [&_a]:hover:[&>code]:border-secondary [&_a]:hover:[&>code]:text-secondary [&_a]:focus-visible:[&>code]:border-secondary [&_a]:focus-visible:[&>code]:text-secondary [&>ul]:marker:text-secondary/50",
            CalloutBaseTheme::make(props: ['color' => 'secondary'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-4 shrink-0 align-sub me-1.5 inline-block transition-colors text-primary",
            CalloutBaseTheme::make(props: ['color' => 'primary'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-4 shrink-0 align-sub me-1.5 inline-block transition-colors text-secondary",
            CalloutBaseTheme::make(props: ['color' => 'secondary'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-4 align-top absolute right-2 top-2 pointer-events-none transition-colors text-primary-600 dark:text-primary-300",
            CalloutBaseTheme::make(props: ['color' => 'primary'], slot: 'externalIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-4 align-top absolute right-2 top-2 pointer-events-none transition-colors text-secondary-600 dark:text-secondary-300",
            CalloutBaseTheme::make(props: ['color' => 'secondary'], slot: 'externalIcon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative block px-4 py-3 rounded-md text-sm/6 my-5 last:mb-0 [&_code]:text-xs/5 [&_code]:bg-default [&_pre]:bg-default [&>div]:my-2.5 [&_ul]:my-2.5 [&_ol]:my-2.5 [&>*]:last:!mb-0 [&_ul]:ps-4.5 [&_ol]:ps-4.5 [&_li]:my-0 transition-colors border border-muted bg-muted text-default",
            CalloutBaseTheme::make(props: ['color' => 'neutral'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-4 shrink-0 align-sub me-1.5 inline-block transition-colors text-highlighted",
            CalloutBaseTheme::make(props: ['color' => 'neutral'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-4 align-top absolute right-2 top-2 pointer-events-none transition-colors text-dimmed",
            CalloutBaseTheme::make(props: ['color' => 'neutral'], slot: 'externalIcon'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative block px-4 py-3 rounded-md text-sm/6 my-5 last:mb-0 [&_code]:text-xs/5 [&_code]:bg-default [&_pre]:bg-default [&>div]:my-2.5 [&_ul]:my-2.5 [&_ol]:my-2.5 [&>*]:last:!mb-0 [&_ul]:ps-4.5 [&_ol]:ps-4.5 [&_li]:my-0 transition-colors border border-primary/25 bg-primary/10 text-primary-600 dark:text-primary-300 [&_a]:text-primary [&_a]:hover:border-primary [&_a]:focus-visible:outline-primary [&_code]:text-primary-600 dark:[&_code]:text-primary-300 [&_code]:border-primary/25 [&_a]:hover:[&>code]:border-primary [&_a]:hover:[&>code]:text-primary [&_a]:focus-visible:[&>code]:border-primary [&_a]:focus-visible:[&>code]:text-primary [&>ul]:marker:text-primary/50 hover:border-primary has-focus-visible:border-primary',
            CalloutBaseTheme::make(props: ['color' => 'primary', 'to' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'size-4 align-top absolute right-2 top-2 pointer-events-none transition-colors text-primary-600 dark:text-primary-300 group-hover:text-primary',
            CalloutBaseTheme::make(props: ['color' => 'primary', 'to' => true], slot: 'externalIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative block px-4 py-3 rounded-md text-sm/6 my-5 last:mb-0 [&_code]:text-xs/5 [&_code]:bg-default [&_pre]:bg-default [&>div]:my-2.5 [&_ul]:my-2.5 [&_ol]:my-2.5 [&>*]:last:!mb-0 [&_ul]:ps-4.5 [&_ol]:ps-4.5 [&_li]:my-0 transition-colors border border-muted bg-muted text-default hover:border-inverted has-focus-visible:border-inverted',
            CalloutBaseTheme::make(props: ['color' => 'neutral', 'to' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'size-4 align-top absolute right-2 top-2 pointer-events-none transition-colors text-dimmed group-hover:text-highlighted',
            CalloutBaseTheme::make(props: ['color' => 'neutral', 'to' => true], slot: 'externalIcon'),
        );
    }

}
