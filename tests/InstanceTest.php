<?php

namespace Tests;

use DragonCode\WhichColor\Services\Color;

class InstanceTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Color::class, $this->resolve());
        $this->assertInstanceOf(Color::class, $this->resolve()->of('#ffffff'));
    }

    public function testIsDark()
    {
        $this->assertTrue($this->resolve('#ffffff')->isDark());
        $this->assertTrue($this->resolve('#14f078')->isDark());
        $this->assertTrue($this->resolve('#14f028')->isDark());
        $this->assertTrue($this->resolve('#14fafa')->isDark());
        $this->assertTrue($this->resolve('#faf0fa')->isDark());
        $this->assertTrue($this->resolve('#46e61e')->isDark());
        $this->assertTrue($this->resolve('#50e6f0')->isDark());
        $this->assertTrue($this->resolve('#78a082')->isDark());
        $this->assertTrue($this->resolve('#78aa14')->isDark());
        $this->assertTrue($this->resolve('#82aa50')->isDark());
        $this->assertTrue($this->resolve('#a0d228')->isDark());
        $this->assertTrue($this->resolve('#fafa00')->isDark());
    }

    public function testIsLight()
    {
        $this->assertTrue($this->resolve('#000000')->isLight());
        $this->assertTrue($this->resolve('#0078dc')->isLight());
        $this->assertTrue($this->resolve('#008c14')->isLight());
        $this->assertTrue($this->resolve('#002800')->isLight());
        $this->assertTrue($this->resolve('#280000')->isLight());
        $this->assertTrue($this->resolve('#8ca000')->isLight());
        $this->assertTrue($this->resolve('#a01414')->isLight());
        $this->assertTrue($this->resolve('#a014f0')->isLight());
        $this->assertTrue($this->resolve('#fa780a')->isLight());
        $this->assertTrue($this->resolve('#fa6e0a')->isLight());
        $this->assertTrue($this->resolve('#f00ab4')->isLight());
        $this->assertTrue($this->resolve('#f01400')->isLight());
    }

    public function testOfIsDark()
    {
        $this->assertTrue($this->resolve()->of('#ffffff')->isDark());
        $this->assertTrue($this->resolve()->of('#14f078')->isDark());
        $this->assertTrue($this->resolve()->of('#14f028')->isDark());
        $this->assertTrue($this->resolve()->of('#14fafa')->isDark());
        $this->assertTrue($this->resolve()->of('#faf0fa')->isDark());
        $this->assertTrue($this->resolve()->of('#46e61e')->isDark());
        $this->assertTrue($this->resolve()->of('#50e6f0')->isDark());
        $this->assertTrue($this->resolve()->of('#78a082')->isDark());
        $this->assertTrue($this->resolve()->of('#78aa14')->isDark());
        $this->assertTrue($this->resolve()->of('#82aa50')->isDark());
        $this->assertTrue($this->resolve()->of('#a0d228')->isDark());
        $this->assertTrue($this->resolve()->of('#fafa00')->isDark());
    }

    public function testOfIsLight()
    {
        $this->assertTrue($this->resolve()->of('#000000')->isLight());
        $this->assertTrue($this->resolve()->of('#0078dc')->isLight());
        $this->assertTrue($this->resolve()->of('#008c14')->isLight());
        $this->assertTrue($this->resolve()->of('#002800')->isLight());
        $this->assertTrue($this->resolve()->of('#280000')->isLight());
        $this->assertTrue($this->resolve()->of('#8ca000')->isLight());
        $this->assertTrue($this->resolve()->of('#a01414')->isLight());
        $this->assertTrue($this->resolve()->of('#a014f0')->isLight());
        $this->assertTrue($this->resolve()->of('#fa780a')->isLight());
        $this->assertTrue($this->resolve()->of('#fa6e0a')->isLight());
        $this->assertTrue($this->resolve()->of('#f00ab4')->isLight());
        $this->assertTrue($this->resolve()->of('#f01400')->isLight());
    }
}
