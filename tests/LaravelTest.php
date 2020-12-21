<?php

namespace Tests;

use Helldar\WhichColor\Facades\Color;
use Helldar\WhichColor\Services\Color as Service;

final class LaravelTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Service::class, Color::of('#ffffff'));
    }

    public function testIsDark()
    {
        $this->assertTrue(Color::of('#ffffff')->isDark());
        $this->assertTrue(Color::of('#14f078')->isDark());
        $this->assertTrue(Color::of('#14f028')->isDark());
        $this->assertTrue(Color::of('#14fafa')->isDark());
        $this->assertTrue(Color::of('#faf0fa')->isDark());
        $this->assertTrue(Color::of('#46e61e')->isDark());
        $this->assertTrue(Color::of('#50e6f0')->isDark());
        $this->assertTrue(Color::of('#78a082')->isDark());
        $this->assertTrue(Color::of('#78aa14')->isDark());
        $this->assertTrue(Color::of('#82aa50')->isDark());
        $this->assertTrue(Color::of('#a0d228')->isDark());
        $this->assertTrue(Color::of('#fafa00')->isDark());
    }

    public function testIsLight()
    {
        $this->assertTrue(Color::of('#000000')->isLight());
        $this->assertTrue(Color::of('#0078dc')->isLight());
        $this->assertTrue(Color::of('#008c14')->isLight());
        $this->assertTrue(Color::of('#002800')->isLight());
        $this->assertTrue(Color::of('#280000')->isLight());
        $this->assertTrue(Color::of('#8ca000')->isLight());
        $this->assertTrue(Color::of('#a01414')->isLight());
        $this->assertTrue(Color::of('#a014f0')->isLight());
        $this->assertTrue(Color::of('#fa780a')->isLight());
        $this->assertTrue(Color::of('#fa6e0a')->isLight());
        $this->assertTrue(Color::of('#f00ab4')->isLight());
        $this->assertTrue(Color::of('#f01400')->isLight());
    }
}
