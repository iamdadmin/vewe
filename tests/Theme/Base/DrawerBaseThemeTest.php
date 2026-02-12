<?php

declare(strict_types=1);

namespace Vewe\Ui\Tests\Theme\Base;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Vewe\Ui\Theme\Base\DrawerBaseTheme;

final class DrawerBaseThemeTest extends TestCase
{    #[Test]
    public function slot_tests(): void
    {

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fixed inset-0 bg-elevated/75",
            DrawerBaseTheme::make(slot: 'overlay'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default ring ring-default flex focus:outline-none",
            DrawerBaseTheme::make(slot: 'content'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 !bg-accented transition-opacity",
            DrawerBaseTheme::make(slot: 'handle'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "w-full flex flex-col gap-4 p-4 overflow-y-auto",
            DrawerBaseTheme::make(slot: 'container'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "",
            DrawerBaseTheme::make(slot: 'header'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "text-highlighted font-semibold",
            DrawerBaseTheme::make(slot: 'title'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "mt-1 text-muted text-sm",
            DrawerBaseTheme::make(slot: 'description'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex-1",
            DrawerBaseTheme::make(slot: 'body'),
        );

        // Ensure the named slot is retrieved correctly
        $this->assertSame(
            "flex flex-col gap-1.5",
            DrawerBaseTheme::make(slot: 'footer'),
        );
    }
    #[Test]
    public function variant_tests(): void
    {

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default ring ring-default flex focus:outline-none mb-24 flex-col-reverse h-auto max-h-[96%]",
            DrawerBaseTheme::make(props: ['direction' => 'top'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 !bg-accented transition-opacity mb-4 !w-12 !h-1.5 mx-auto",
            DrawerBaseTheme::make(props: ['direction' => 'top'], slot: 'handle'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default ring ring-default flex focus:outline-none flex-row w-auto max-w-[calc(100%-2rem)]",
            DrawerBaseTheme::make(props: ['direction' => 'right'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 !bg-accented transition-opacity !ml-4 !h-12 !w-1.5 mt-auto mb-auto",
            DrawerBaseTheme::make(props: ['direction' => 'right'], slot: 'handle'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default ring ring-default flex focus:outline-none mt-24 flex-col h-auto max-h-[96%]",
            DrawerBaseTheme::make(props: ['direction' => 'bottom'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 !bg-accented transition-opacity mt-4 !w-12 !h-1.5 mx-auto",
            DrawerBaseTheme::make(props: ['direction' => 'bottom'], slot: 'handle'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default ring ring-default flex focus:outline-none flex-row-reverse w-auto max-w-[calc(100%-2rem)]",
            DrawerBaseTheme::make(props: ['direction' => 'left'], slot: 'content'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "shrink-0 !bg-accented transition-opacity !mr-4 !h-12 !w-1.5 mt-auto mb-auto",
            DrawerBaseTheme::make(props: ['direction' => 'left'], slot: 'handle'),
        );

        // Ensure the variant for the named slot is retrieved correctly
        $this->assertSame(
            "fixed bg-default ring ring-default flex focus:outline-none rounded-lg after:hidden overflow-hidden [--initial-transform:calc(100%+1.5rem)]",
            DrawerBaseTheme::make(props: ['inset' => 'true'], slot: 'content'),
        );
    }
    #[Test]
    public function compound_variant_tests(): void
    {

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none mb-24 flex-col-reverse h-auto max-h-[96%]',
            DrawerBaseTheme::make(props: ['direction' => 'top'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 !bg-accented transition-opacity mb-4 !w-12 !h-1.5 mx-auto',
            DrawerBaseTheme::make(props: ['direction' => 'top'], slot: 'handle'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none mt-24 flex-col h-auto max-h-[96%]',
            DrawerBaseTheme::make(props: ['direction' => 'bottom'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 !bg-accented transition-opacity mt-4 !w-12 !h-1.5 mx-auto',
            DrawerBaseTheme::make(props: ['direction' => 'bottom'], slot: 'handle'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none mb-24 flex-col-reverse h-auto max-h-[96%] h-full',
            DrawerBaseTheme::make(props: ['direction' => 'top', 'snapPoints' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none mt-24 flex-col h-auto max-h-[96%] h-full',
            DrawerBaseTheme::make(props: ['direction' => 'bottom', 'snapPoints' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none flex-row w-auto max-w-[calc(100%-2rem)]',
            DrawerBaseTheme::make(props: ['direction' => 'right'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 !bg-accented transition-opacity !ml-4 !h-12 !w-1.5 mt-auto mb-auto',
            DrawerBaseTheme::make(props: ['direction' => 'right'], slot: 'handle'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none flex-row-reverse w-auto max-w-[calc(100%-2rem)]',
            DrawerBaseTheme::make(props: ['direction' => 'left'], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'shrink-0 !bg-accented transition-opacity !mr-4 !h-12 !w-1.5 mt-auto mb-auto',
            DrawerBaseTheme::make(props: ['direction' => 'left'], slot: 'handle'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none flex-row w-auto max-w-[calc(100%-2rem)] w-full',
            DrawerBaseTheme::make(props: ['direction' => 'right', 'snapPoints' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none flex-row-reverse w-auto max-w-[calc(100%-2rem)] w-full',
            DrawerBaseTheme::make(props: ['direction' => 'left', 'snapPoints' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none mb-24 flex-col-reverse h-auto max-h-[96%] inset-x-4 top-4',
            DrawerBaseTheme::make(props: ['direction' => 'top', 'inset' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none mb-24 flex-col-reverse h-auto max-h-[96%] inset-x-0 top-0 rounded-b-lg',
            DrawerBaseTheme::make(props: ['direction' => 'top', 'inset' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none mt-24 flex-col h-auto max-h-[96%] inset-x-4 bottom-4',
            DrawerBaseTheme::make(props: ['direction' => 'bottom', 'inset' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none mt-24 flex-col h-auto max-h-[96%] inset-x-0 bottom-0 rounded-t-lg',
            DrawerBaseTheme::make(props: ['direction' => 'bottom', 'inset' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none flex-row-reverse w-auto max-w-[calc(100%-2rem)] inset-y-4 left-4',
            DrawerBaseTheme::make(props: ['direction' => 'left', 'inset' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none flex-row-reverse w-auto max-w-[calc(100%-2rem)] inset-y-0 left-0 rounded-r-lg',
            DrawerBaseTheme::make(props: ['direction' => 'left', 'inset' => false], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none flex-row w-auto max-w-[calc(100%-2rem)] inset-y-4 right-4',
            DrawerBaseTheme::make(props: ['direction' => 'right', 'inset' => true], slot: 'content'),
        );

        // Ensure the compoundVariant for the named slot is retrieved correctly
        $this->assertSame(
            'fixed bg-default ring ring-default flex focus:outline-none flex-row w-auto max-w-[calc(100%-2rem)] inset-y-0 right-0 rounded-l-lg',
            DrawerBaseTheme::make(props: ['direction' => 'right', 'inset' => false], slot: 'content'),
        );
    }

}
