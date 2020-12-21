<?php

namespace Tests;

use Helldar\WhichColor\Services\Color;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function resolve(string $color = null)
    {
        return new Color($color);
    }
}
