<?php

declare(strict_types=1);

namespace Vewe {
    use Tempest\Support\Arr\ImmutableArray;
    use Tempest\Support\Str\ImmutableString;

    /**
     * Map $attributes to a flattened string
     *
     * @param \Tempest\Support\Arr\ImmutableArray<string, string> $attributes
     * @return ImmutableString
     */
    function mkAttrs(ImmutableArray $attributes): ImmutableString
    {
        return $attributes
            // @mago-expect analysis:possibly-invalid-argument
            ->map(fn (string $value, string $key) => "{$key}=\"{$value}\"")
            ->implode(' ');
    }
}
