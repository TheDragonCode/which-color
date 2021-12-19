<?php

namespace DragonCode\WhichColor\Facades;

use DragonCode\Support\Facades\Facade;
use DragonCode\WhichColor\Services\Color as Support;

/**
 * @method static Support of(string $hex)
 */
class Color extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Support::class;
    }
}
