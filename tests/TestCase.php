<?php

namespace Tests;

use DragonCode\WhichColor\Services\Color;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function resolve(string $color = null): Color
    {
        return new Color($color);
    }
}
