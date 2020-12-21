<?php

namespace Helldar\BlackOrWhiteTextColor\Services;

class Convert
{
    /**
     * Convert a string HEX color code to an RGB array.
     *
     * @param  string  $hex
     *
     * @return array
     */
    public function hex2rgb($hex = '#000000')
    {
        if (is_array($hex)) {
            return $hex;
        }

        $hex = str_replace('#', '', $hex);
        $f   = function ($x) {
            return hexdec($x);
        };

        if (strlen($hex) === 3) {
            $hex_new = '';

            for ($i = 0; $i < 3; $i++) {
                $hex_new .= $hex[$i] . $hex[$i];
            }

            $hex = $hex_new;
        }

        return array_map($f, str_split($hex, 2));
    }

    /**
     * Convert RGB color to HEX code.
     *
     * @param  array  $rgb
     *
     * @return string
     */
    public function rgb2hex($rgb = [])
    {
        $f = function ($x) {
            return str_pad(dechex($x), 2, '0', STR_PAD_LEFT);
        };

        return '#' . implode('', array_map($f, $rgb));
    }
}
