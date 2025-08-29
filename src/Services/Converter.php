<?php

declare(strict_types=1);

namespace DragonCode\WhichColor\Services;

use DragonCode\Support\Facades\Helpers\Arr;
use DragonCode\Support\Facades\Helpers\Str;
use DragonCode\Support\Facades\Instances\Instance;
use DragonCode\WhichColor\Dto\RGB;
use ReflectionException;

class Converter
{
    /**
     * Convert a string HEX color code to an RGB array.
     */
    public function hex2rgb(array|RGB|string|null $hex = '#000000'): RGB
    {
        if (Instance::of($hex, RGB::class)) {
            return $hex;
        }

        if (is_string($hex)) {
            $hex = $this->parseString($hex);
        }

        [$red, $green, $blue] = $this->parseArray($hex);

        return RGB::make(compact('red', 'green', 'blue'));
    }

    /**
     * Convert RGB color to HEX code.
     *
     * @throws ReflectionException
     */
    public function rgb2hex(array|RGB $rgb = []): string
    {
        return Arr::of($this->hex2rgb($rgb)->toArray())
            ->map(fn ($x) => str_pad(dechex($x), 2, '0', STR_PAD_LEFT))
            ->implode('')
            ->prepend('#')
            ->toString();
    }

    protected function parseString(string $hex): array
    {
        $hex = Str::after($hex, '#');

        $is_short = Str::length($hex) === 3;

        return array_map(
            fn ($x) => hexdec($is_short ? $x . $x : $x),
            str_split($hex, $is_short ? 1 : 2)
        );
    }

    protected function parseArray(array $hex): array
    {
        if (isset($hex['r'], $hex['g'], $hex['b'])) {
            ['r' => $red, 'g' => $green, 'b' => $blue] = $hex;
        } elseif (isset($hex['red'], $hex['green'], $hex['blue'])) {
            ['red' => $red, 'green' => $green, 'blue' => $blue] = $hex;
        } else {
            [$red, $green, $blue] = $hex;
        }

        return [$red, $green, $blue];
    }
}
