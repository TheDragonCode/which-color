<?php

declare(strict_types=1);

namespace Tests;

use DragonCode\WhichColor\Facades\Color as ColorFacade;
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
        $this->assertTrue($this->resolve('#ffffff')->darkIsBetter());
        $this->assertTrue($this->resolve('#14f078')->darkIsBetter());
        $this->assertTrue($this->resolve('#14f028')->darkIsBetter());
        $this->assertTrue($this->resolve('#14fafa')->darkIsBetter());
        $this->assertTrue($this->resolve('#faf0fa')->darkIsBetter());
        $this->assertTrue($this->resolve('#46e61e')->darkIsBetter());
        $this->assertTrue($this->resolve('#50e6f0')->darkIsBetter());
        $this->assertTrue($this->resolve('#78a082')->darkIsBetter());
        $this->assertTrue($this->resolve('#78aa14')->darkIsBetter());
        $this->assertTrue($this->resolve('#82aa50')->darkIsBetter());
        $this->assertTrue($this->resolve('#a0d228')->darkIsBetter());
        $this->assertTrue($this->resolve('#fafa00')->darkIsBetter());
    }

    public function testIsLight()
    {
        $this->assertTrue($this->resolve('#000000')->lightIsBetter());
        $this->assertTrue($this->resolve('#0078dc')->lightIsBetter());
        $this->assertTrue($this->resolve('#008c14')->lightIsBetter());
        $this->assertTrue($this->resolve('#002800')->lightIsBetter());
        $this->assertTrue($this->resolve('#280000')->lightIsBetter());
        $this->assertTrue($this->resolve('#8ca000')->lightIsBetter());
        $this->assertTrue($this->resolve('#a01414')->lightIsBetter());
        $this->assertTrue($this->resolve('#a014f0')->lightIsBetter());
        $this->assertTrue($this->resolve('#fa780a')->lightIsBetter());
        $this->assertTrue($this->resolve('#fa6e0a')->lightIsBetter());
        $this->assertTrue($this->resolve('#f00ab4')->lightIsBetter());
        $this->assertTrue($this->resolve('#f01400')->lightIsBetter());
    }

    public function testOfIsDark()
    {
        $this->assertTrue($this->resolve()->of('#ffffff')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#14f078')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#14f028')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#14fafa')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#faf0fa')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#46e61e')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#50e6f0')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#78a082')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#78aa14')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#82aa50')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#a0d228')->darkIsBetter());
        $this->assertTrue($this->resolve()->of('#fafa00')->darkIsBetter());
    }

    public function testOfIsLight()
    {
        $this->assertTrue($this->resolve()->of('#000000')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#0078dc')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#008c14')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#002800')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#280000')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#8ca000')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#a01414')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#a014f0')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#fa780a')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#fa6e0a')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#f00ab4')->lightIsBetter());
        $this->assertTrue($this->resolve()->of('#f01400')->lightIsBetter());
    }

    protected function resolve(?string $color = null): Color
    {
        return ColorFacade::of($color);
    }
}
