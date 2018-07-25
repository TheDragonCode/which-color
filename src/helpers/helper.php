<?php

use Helldar\BlackOrWhiteTextColor\Services\Color;

if (!function_exists('black_is_better_text_color')) {
    /**
     * Will return TRUE if black is better, or FALSE if white.
     *
     * @param string $hex
     *
     * @return bool
     */
    function black_is_better_text_color($hex = '#000000')
    {
        return (new Color($hex))->isBlack();
    }
}
