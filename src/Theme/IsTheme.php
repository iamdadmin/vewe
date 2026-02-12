<?php
// @mago-expect analysis:never-return
// @mago-expect analysis:no-value
// @mago-expect analysis:non-existent-class-constant

declare(strict_types=1);

namespace Vewe\Ui\Theme;

use Tempest\Support\Arr\ImmutableArray;
use Vewe\ClassVariance\Cv;

trait IsTheme
{
    private string $color = 'primary';

    private string $highlightColor = 'primary';

    private string $spotlightColor = 'primary';

    private string $loadingColor = 'primary';

    /**
     * Get CSS classes for a slot with variants applied
     * @param string $slot Slot name
     * @param array<array-key, string> $props Props passed to slot
     * @return string Final CSS class string
     */
    public static function make(
        string $slot = 'base',
        array $props = [],
    ): string {
        $instance = new static();

        $instance->color = ($props['color'] ?? null) !== 'neutral'
            ? $props['color'] ?? 'primary'
            : 'primary';

        $instance->highlightColor = ($props['highlightColor'] ?? null) !== 'neutral'
            ? $props['hightlightColor'] ?? $instance->color
            : $instance->color;

        $instance->spotlightColor = ($props['spotlightColor'] ?? null) !== 'neutral'
            ? $props['spotlightColor'] ?? $instance->color
            : $instance->color;

        $instance->loadingColor = ($props['loadingColor'] ?? null) !== 'neutral'
            ? $props['loadingColor'] ?? $instance->color
            : $instance->color;

        return $instance->build($slot, $props);
    }

    /**
     * @param array<array-key, string> $props
     */
    protected function build(string $slot, array $props = []): string
    {
        /** @var string|array<array-key, string|array<array-key, string>> $base */
        $base = $this->slots->toArray() ?? [];

        /** @var array{
         *     variants?: array<array-key, array<array-key, string|array<array-key, string>|array<array-key, string|array<array-key, string>>>>,
         *     compoundVariants?: array<array-key, array<array-key, string|bool|array<array-key, string>>>,
         *     defaultVariants?: array<array-key, string|bool>
         * } $variance */
        $variance = array(
            'variants' => $this->variants->toArray() ?? [],
            'compoundVariants' => $this->compoundVariants->toArray() ?? [],
            'defaultVariants' => $this->defaultVariants->toArray() ?? [],
        );

        $cv = Cv::new(
            $base,
            $variance,
        );

        return $cv(props: $props, slot: $slot);
    }

    private function replacePlaceholder(mixed $subject, string $replace, string $replaceWith): mixed
    {
        if (is_string($subject)) {
            return str_replace($subject, $replace, $replaceWith);
        }

        if (is_array($subject)) {
            return new ImmutableArray($subject)
                ->map(fn (mixed $value) => $this->replacePlaceholder($value, $replace, $replaceWith))
                ->toArray();
        }

        return $subject;
    }
}
