<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base\Prose;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\Prose\CardBaseTheme;

final class CardBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure that the default assignment of base matches slot base
        $this->assertSame(
            "group relative block my-5 p-4 sm:p-6 border border-default rounded-md bg-default transition-colors",
            CardBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "group relative block my-5 p-4 sm:p-6 border border-default rounded-md bg-default transition-colors",
            CardBaseTheme::make(slot: 'base'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-6 mb-2 block text-primary",
            CardBaseTheme::make(slot: 'icon'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted font-semibold",
            CardBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-muted *:first:mt-0 *:last:mb-0 *:my-1",
            CardBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "size-4 align-top absolute right-2 top-2 text-dimmed pointer-events-none transition-colors",
            CardBaseTheme::make(slot: 'externalIcon'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-6 mb-2 block text-primary",
            CardBaseTheme::make(props: ['color' => 'primary'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-6 mb-2 block text-secondary",
            CardBaseTheme::make(props: ['color' => 'secondary'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "size-6 mb-2 block text-highlighted",
            CardBaseTheme::make(props: ['color' => 'neutral'], slot: 'icon'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "group relative block my-5 p-4 sm:p-6 border border-default rounded-md bg-default transition-colors",
            CardBaseTheme::make(props: ['to' => 'true'], slot: 'base'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "text-[15px] text-muted *:first:mt-0 *:last:mb-0 *:my-1 mt-1",
            CardBaseTheme::make(props: ['title' => 'true'], slot: 'description'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative block my-5 p-4 sm:p-6 border border-default rounded-md bg-default transition-colors hover:bg-primary/10 hover:border-primary has-focus-visible:border-primary',
            CardBaseTheme::make(props: ['color' => 'primary', 'to' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'size-4 align-top absolute right-2 top-2 text-dimmed pointer-events-none transition-colors group-hover:text-primary',
            CardBaseTheme::make(props: ['color' => 'primary', 'to' => true], slot: 'externalIcon'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'group relative block my-5 p-4 sm:p-6 border border-default rounded-md bg-default transition-colors hover:bg-elevated/50 hover:border-inverted has-focus-visible:border-inverted',
            CardBaseTheme::make(props: ['color' => 'neutral', 'to' => true], slot: 'base'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'size-4 align-top absolute right-2 top-2 text-dimmed pointer-events-none transition-colors group-hover:text-highlighted',
            CardBaseTheme::make(props: ['color' => 'neutral', 'to' => true], slot: 'externalIcon'),
        );
    }

}
