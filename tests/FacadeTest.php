<?php

namespace Tests;

use DragonCode\WhichColor\Facades\Color;
use DragonCode\WhichColor\Services\Color as Service;

class FacadeTest extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(Service::class, Color::of('#ffffff'));
    }

    public function testIsDark()
    {
        $this->assertTrue(Color::of('#ffffff')->darkIsBetter());
        $this->assertTrue(Color::of('#14f078')->darkIsBetter());
        $this->assertTrue(Color::of('#14f028')->darkIsBetter());
        $this->assertTrue(Color::of('#14fafa')->darkIsBetter());
        $this->assertTrue(Color::of('#faf0fa')->darkIsBetter());
        $this->assertTrue(Color::of('#46e61e')->darkIsBetter());
        $this->assertTrue(Color::of('#50e6f0')->darkIsBetter());
        $this->assertTrue(Color::of('#78a082')->darkIsBetter());
        $this->assertTrue(Color::of('#78aa14')->darkIsBetter());
        $this->assertTrue(Color::of('#82aa50')->darkIsBetter());
        $this->assertTrue(Color::of('#a0d228')->darkIsBetter());
        $this->assertTrue(Color::of('#fafa00')->darkIsBetter());
    }

    public function testIsLight()
    {
        $this->assertTrue(Color::of('#000000')->lightIsBetter());
        $this->assertTrue(Color::of('#0078dc')->lightIsBetter());
        $this->assertTrue(Color::of('#008c14')->lightIsBetter());
        $this->assertTrue(Color::of('#002800')->lightIsBetter());
        $this->assertTrue(Color::of('#280000')->lightIsBetter());
        $this->assertTrue(Color::of('#8ca000')->lightIsBetter());
        $this->assertTrue(Color::of('#a01414')->lightIsBetter());
        $this->assertTrue(Color::of('#a014f0')->lightIsBetter());
        $this->assertTrue(Color::of('#fa780a')->lightIsBetter());
        $this->assertTrue(Color::of('#fa6e0a')->lightIsBetter());
        $this->assertTrue(Color::of('#f00ab4')->lightIsBetter());
        $this->assertTrue(Color::of('#f01400')->lightIsBetter());
    }
}
