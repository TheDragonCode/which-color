<?php

namespace Helldar\WhichColor\Facades;

use Helldar\WhichColor\Services\Color as Support;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Helldar\WhichColor\Services\Color of(string $hex)
 */
final class Color extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Support::class;
    }
}
