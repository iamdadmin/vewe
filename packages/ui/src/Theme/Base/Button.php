<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme\Base;

use Vewe\Ui\Theme\IsTheme;
use Vewe\Ui\Theme\Theme;

/**
 * Button component theme
 *
 * Multi-slot component with extensive variant support
 * Uses FeatureNinja CVA for variant resolution
 * Uses TalesFromADev TailwindMerge for Tailwind v4 class merging
 *
 * Usage:
 *   Button::make('base', ['color' => 'primary', 'variant' => 'solid', 'size' => 'md'])
 *   Button::make('leadingIcon', ['size' => 'lg'])
 *
 * @see button.json Original Nuxt-UI theme definition
 */
final class Button implements Theme
{
    use IsTheme;

    /**
     * Slot definitions - individual parts of the button component
     */
    protected const array SLOTS = [
        'base' => [
            'rounded-md font-medium inline-flex items-center',
            'disabled:cursor-not-allowed aria-disabled:cursor-not-allowed',
            'disabled:opacity-75 aria-disabled:opacity-75',
            'transition-colors',
        ],
        'label' => 'truncate',
        'leadingIcon' => 'shrink-0',
        'leadingAvatar' => 'shrink-0',
        'leadingAvatarSize' => '',
        'trailingIcon' => 'shrink-0',
    ];

    /**
     * Variant definitions
     *
     * Variants can be:
     * - Empty strings (no classes, used for compound variants)
     * - Strings (apply to base slot)
     * - Arrays with slot-specific classes
     */
    protected const array VARIANTS = [
        'color' => [
            '$color' => '',
            'neutral' => '',
        ],
        'variant' => [
            'solid' => '',
            'outline' => '',
            'soft' => '',
            'subtle' => '',
            'ghost' => '',
            'link' => '',
        ],
        'size' => [
            'xs' => [
                'base' => 'px-2 py-1 text-xs gap-1',
                'leadingIcon' => 'size-4',
                'leadingAvatarSize' => '3xs',
                'trailingIcon' => 'size-4',
            ],
            'sm' => [
                'base' => 'px-2.5 py-1.5 text-xs gap-1.5',
                'leadingIcon' => 'size-4',
                'leadingAvatarSize' => '3xs',
                'trailingIcon' => 'size-4',
            ],
            'md' => [
                'base' => 'px-2.5 py-1.5 text-sm gap-1.5',
                'leadingIcon' => 'size-5',
                'leadingAvatarSize' => '2xs',
                'trailingIcon' => 'size-5',
            ],
            'lg' => [
                'base' => 'px-3 py-2 text-sm gap-2',
                'leadingIcon' => 'size-5',
                'leadingAvatarSize' => '2xs',
                'trailingIcon' => 'size-5',
            ],
            'xl' => [
                'base' => 'px-3 py-2 text-base gap-2',
                'leadingIcon' => 'size-6',
                'leadingAvatarSize' => 'xs',
                'trailingIcon' => 'size-6',
            ],
        ],
        'block' => [
            'true' => [
                'base' => 'w-full justify-center',
                'trailingIcon' => 'ms-auto',
            ],
        ],
        'square' => [
            'true' => '',
        ],
        'leading' => [
            'true' => '',
        ],
        'trailing' => [
            'true' => '',
        ],
        'loading' => [
            'true' => '',
        ],
        'active' => [
            'true' => [
                'base' => '',
            ],
            'false' => [
                'base' => '',
            ],
        ],
    ];

    /**
     * Compound variants - classes applied when multiple conditions match
     *
     * Note: Using hardcoded 'primary' color instead of tokens
     * For dynamic colors, handle via inheritance/traits
     */
    protected const array COMPOUND_VARIANTS = [
        // Primary color variants
        [
            'color' => 'color',
            'variant' => 'solid',
            'class' => 'text-inverted bg-primary hover:bg-primary/75 active:bg-primary/75 disabled:bg-primary aria-disabled:bg-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary',
        ],
        [
            'color' => 'color',
            'variant' => 'outline',
            'class' => 'ring ring-inset ring-primary/50 text-primary hover:bg-primary/10 active:bg-primary/10 disabled:bg-transparent aria-disabled:bg-transparent dark:disabled:bg-transparent dark:aria-disabled:bg-transparent focus:outline-none focus-visible:ring-2 focus-visible:ring-primary',
        ],
        [
            'color' => 'color',
            'variant' => 'soft',
            'class' => 'text-primary bg-primary/10 hover:bg-primary/15 active:bg-primary/15 focus:outline-none focus-visible:bg-primary/15 disabled:bg-primary/10 aria-disabled:bg-primary/10',
        ],
        [
            'color' => 'color',
            'variant' => 'subtle',
            'class' => 'text-primary ring ring-inset ring-primary/25 bg-primary/10 hover:bg-primary/15 active:bg-primary/15 disabled:bg-primary/10 aria-disabled:bg-primary/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary',
        ],
        [
            'color' => 'color',
            'variant' => 'ghost',
            'class' => 'text-primary hover:bg-primary/10 active:bg-primary/10 focus:outline-none focus-visible:bg-primary/10 disabled:bg-transparent aria-disabled:bg-transparent dark:disabled:bg-transparent dark:aria-disabled:bg-transparent',
        ],
        [
            'color' => 'color',
            'variant' => 'link',
            'class' => 'text-primary hover:text-primary/75 active:text-primary/75 disabled:text-primary aria-disabled:text-primary focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-primary',
        ],
        // Neutral color variants
        [
            'color' => 'neutral',
            'variant' => 'solid',
            'class' => 'text-inverted bg-inverted hover:bg-inverted/90 active:bg-inverted/90 disabled:bg-inverted aria-disabled:bg-inverted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-inverted',
        ],
        [
            'color' => 'neutral',
            'variant' => 'outline',
            'class' => 'ring ring-inset ring-accented text-default bg-default hover:bg-elevated active:bg-elevated disabled:bg-default aria-disabled:bg-default focus:outline-none focus-visible:ring-2 focus-visible:ring-inverted',
        ],
        [
            'color' => 'neutral',
            'variant' => 'soft',
            'class' => 'text-default bg-elevated hover:bg-accented/75 active:bg-accented/75 focus:outline-none focus-visible:bg-accented/75 disabled:bg-elevated aria-disabled:bg-elevated',
        ],
        [
            'color' => 'neutral',
            'variant' => 'subtle',
            'class' => 'ring ring-inset ring-accented text-default bg-elevated hover:bg-accented/75 active:bg-accented/75 disabled:bg-elevated aria-disabled:bg-elevated focus:outline-none focus-visible:ring-2 focus-visible:ring-inverted',
        ],
        [
            'color' => 'neutral',
            'variant' => 'ghost',
            'class' => 'text-default hover:bg-elevated active:bg-elevated focus:outline-none focus-visible:bg-elevated hover:disabled:bg-transparent dark:hover:disabled:bg-transparent hover:aria-disabled:bg-transparent dark:hover:aria-disabled:bg-transparent',
        ],
        [
            'color' => 'neutral',
            'variant' => 'link',
            'class' => 'text-muted hover:text-default active:text-default disabled:text-muted aria-disabled:text-muted focus:outline-none focus-visible:ring-inset focus-visible:ring-2 focus-visible:ring-inverted',
        ],
        // Size + Square combinations
        [
            'size' => 'xs',
            'square' => true,
            'class' => 'p-1',
        ],
        [
            'size' => 'sm',
            'square' => true,
            'class' => 'p-1.5',
        ],
        [
            'size' => 'md',
            'square' => true,
            'class' => 'p-1.5',
        ],
        [
            'size' => 'lg',
            'square' => true,
            'class' => 'p-2',
        ],
        [
            'size' => 'xl',
            'square' => true,
            'class' => 'p-2',
        ],
        // Loading + Leading/Trailing combinations (slot-specific)
        [
            'loading' => true,
            'leading' => true,
            'class' => [
                'leadingIcon' => 'animate-spin',
            ],
        ],
        [
            'loading' => true,
            'leading' => false,
            'trailing' => true,
            'class' => [
                'trailingIcon' => 'animate-spin',
            ],
        ],
    ];

    /**
     * Default variant values
     */
    protected const array DEFAULT_VARIANTS = [
        'color' => 'primary',
        'variant' => 'solid',
        'size' => 'md',
    ];
}
