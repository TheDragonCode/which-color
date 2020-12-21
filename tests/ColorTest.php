<?php

namespace Helldar\BlackOrWhiteTextColor\Tests;

class ColorTest extends TestCase
{
    public function testIsBlack()
    {
        $this->assertTrue($this->resolve('#ffffff')->isBlack());
        $this->assertTrue($this->resolve('#14f078')->isBlack());
        $this->assertTrue($this->resolve('#14f028')->isBlack());
        $this->assertTrue($this->resolve('#14fafa')->isBlack());
        $this->assertTrue($this->resolve('#faf0fa')->isBlack());
        $this->assertTrue($this->resolve('#46e61e')->isBlack());
        $this->assertTrue($this->resolve('#50e6f0')->isBlack());
        $this->assertTrue($this->resolve('#78a082')->isBlack());
        $this->assertTrue($this->resolve('#78aa14')->isBlack());
        $this->assertTrue($this->resolve('#82aa50')->isBlack());
        $this->assertTrue($this->resolve('#a0d228')->isBlack());
        $this->assertTrue($this->resolve('#fafa00')->isBlack());
    }

    public function testIsWhite()
    {
        $this->assertTrue($this->resolve('#000000')->isWhite());
        $this->assertTrue($this->resolve('#0078dc')->isWhite());
        $this->assertTrue($this->resolve('#008c14')->isWhite());
        $this->assertTrue($this->resolve('#002800')->isWhite());
        $this->assertTrue($this->resolve('#280000')->isWhite());
        $this->assertTrue($this->resolve('#8ca000')->isWhite());
        $this->assertTrue($this->resolve('#a01414')->isWhite());
        $this->assertTrue($this->resolve('#a014f0')->isWhite());
        $this->assertTrue($this->resolve('#fa780a')->isWhite());
        $this->assertTrue($this->resolve('#fa6e0a')->isWhite());
        $this->assertTrue($this->resolve('#f00ab4')->isWhite());
        $this->assertTrue($this->resolve('#f01400')->isWhite());
    }
}
