<?php

use Helldar\WhichColor\Services\Color;

if (! function_exists('black_is_better_text_color')) {
    /**
     * Will return TRUE if black is better, or FALSE if white.
     *
     * @param  string  $hex
     *
     * @return bool
     */
    function black_is_better_text_color($hex = '#000000')
    {
        return (new Color($hex))->isDark();
    }
}

if (! function_exists('black_is_better')) {
    /**
     * This is a short function for calculate color.
     *
     * @param  string  $hex
     *
     * @return bool
     */
    function black_is_better($hex = '#000000')
    {
        return (new Color($hex))->isDark();
    }
}
