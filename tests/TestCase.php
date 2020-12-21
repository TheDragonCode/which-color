<?php

namespace Helldar\BlackOrWhiteTextColor\Tests;

use Helldar\BlackOrWhiteTextColor\Services\Color;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function resolve($color)
    {
        return new Color($color);
    }
}
