<?php

namespace Helldar\BlackOrWhiteTextColor\Tests;

use Helldar\BlackOrWhiteTextColor\Services\Color;
use PHPUnit\Framework\TestCase;

class ColorTest extends TestCase
{
    public function testIsBlack()
    {
        $this->assertTrue((new Color('#000000'))->isWhite(), true);
        $this->assertTrue((new Color('#0078dc'))->isWhite(), true);
        $this->assertTrue((new Color('#008c14'))->isWhite(), true);
        $this->assertTrue((new Color('#002800'))->isWhite(), true);
        $this->assertTrue((new Color('#280000'))->isWhite(), true);
        $this->assertTrue((new Color('#8ca000'))->isWhite(), true);
        $this->assertTrue((new Color('#a01414'))->isWhite(), true);
        $this->assertTrue((new Color('#a014f0'))->isWhite(), true);
        $this->assertTrue((new Color('#fa780a'))->isWhite(), true);
        $this->assertTrue((new Color('#fa6e0a'))->isWhite(), true);
        $this->assertTrue((new Color('#f00ab4'))->isWhite(), true);
        $this->assertTrue((new Color('#f01400'))->isWhite(), true);

        $this->assertTrue((new Color('#ffffff'))->isBlack(), true);
        $this->assertTrue((new Color('#14f078'))->isBlack(), true);
        $this->assertTrue((new Color('#14f028'))->isBlack(), true);
        $this->assertTrue((new Color('#14fafa'))->isBlack(), true);
        $this->assertTrue((new Color('#faf0fa'))->isBlack(), true);
        $this->assertTrue((new Color('#46e61e'))->isBlack(), true);
        $this->assertTrue((new Color('#50e6f0'))->isBlack(), true);
        $this->assertTrue((new Color('#78a082'))->isBlack(), true);
        $this->assertTrue((new Color('#78aa14'))->isBlack(), true);
        $this->assertTrue((new Color('#82aa50'))->isBlack(), true);
        $this->assertTrue((new Color('#a0d228'))->isBlack(), true);
        $this->assertTrue((new Color('#fafa00'))->isBlack(), true);
    }
}
