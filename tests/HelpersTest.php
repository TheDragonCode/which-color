<?php

namespace Helldar\BlackOrWhiteTextColor\Tests;

final class HelpersTest extends TestCase
{
    public function testIsBlack()
    {
        $this->assertTrue(black_is_better_text_color('#ffffff'));
        $this->assertTrue(black_is_better_text_color('#14f078'));
        $this->assertTrue(black_is_better_text_color('#14f028'));
        $this->assertTrue(black_is_better_text_color('#14fafa'));
        $this->assertTrue(black_is_better_text_color('#faf0fa'));
        $this->assertTrue(black_is_better_text_color('#46e61e'));
        $this->assertTrue(black_is_better_text_color('#50e6f0'));
        $this->assertTrue(black_is_better_text_color('#78a082'));
        $this->assertTrue(black_is_better_text_color('#78aa14'));
        $this->assertTrue(black_is_better_text_color('#82aa50'));
        $this->assertTrue(black_is_better_text_color('#a0d228'));
        $this->assertTrue(black_is_better_text_color('#fafa00'));
    }

    public function testIsWhite()
    {
        $this->assertTrue(! black_is_better_text_color());
        $this->assertTrue(! black_is_better_text_color('#000000'));
        $this->assertTrue(! black_is_better_text_color('#0078dc'));
        $this->assertTrue(! black_is_better_text_color('#008c14'));
        $this->assertTrue(! black_is_better_text_color('#002800'));
        $this->assertTrue(! black_is_better_text_color('#280000'));
        $this->assertTrue(! black_is_better_text_color('#8ca000'));
        $this->assertTrue(! black_is_better_text_color('#a01414'));
        $this->assertTrue(! black_is_better_text_color('#a014f0'));
        $this->assertTrue(! black_is_better_text_color('#fa780a'));
        $this->assertTrue(! black_is_better_text_color('#fa6e0a'));
        $this->assertTrue(! black_is_better_text_color('#f00ab4'));
        $this->assertTrue(! black_is_better_text_color('#f01400'));
    }
}
