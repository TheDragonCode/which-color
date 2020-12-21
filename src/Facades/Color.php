<?php

namespace Helldar\BlackOrWhiteTextColor\Facades;

use Helldar\BlackOrWhiteTextColor\Services\Color as Support;
use Illuminate\Support\Facades\Facade;

/**
 * @method static bool isBlack()
 * @method static bool isWhite()
 */
final class Color extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Support::class;
    }
}
