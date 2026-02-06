<?php

declare(strict_types=1);

namespace Vewe\Ui\Theme;

use FeatureNinja\Cva\ClassVarianceAuthority;
use TalesFromADev\TailwindMerge\TailwindMerge;

/**
 * @return array|string|null
 */
trait IsTheme
{
    public static function make(
        string $slot = 'base',
        array $variants = [],
        string|array|null $merge = null,
    ): string {
        return new static()->resolveSlot($slot, $variants, $merge);
    }
}
