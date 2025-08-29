<?php

declare(strict_types=1);

namespace Tests;

use DragonCode\WhichColor\Services\Converter;

class ConverterTest extends TestCase
{
    public function testHex(): void
    {
        $this->assertSame([240, 250, 60], $this->converter()->hex2rgb('#f0fa3c')->toArray());
        $this->assertSame([240, 250, 70], $this->converter()->hex2rgb('#f0fa46')->toArray());
        $this->assertSame([240, 250, 80], $this->converter()->hex2rgb('#f0fa50')->toArray());
        $this->assertSame([240, 250, 90], $this->converter()->hex2rgb('#f0fa5a')->toArray());
        $this->assertSame([240, 250, 100], $this->converter()->hex2rgb('#f0fa64')->toArray());
        $this->assertSame([240, 250, 110], $this->converter()->hex2rgb('#f0fa6e')->toArray());
        $this->assertSame([240, 250, 120], $this->converter()->hex2rgb('#f0fa78')->toArray());
        $this->assertSame([240, 250, 130], $this->converter()->hex2rgb('#f0fa82')->toArray());

        $this->assertSame([250, 0, 0], $this->converter()->hex2rgb('#fa0000')->toArray());
        $this->assertSame([250, 0, 10], $this->converter()->hex2rgb('#fa000a')->toArray());
        $this->assertSame([250, 0, 20], $this->converter()->hex2rgb('#fa0014')->toArray());
        $this->assertSame([250, 0, 30], $this->converter()->hex2rgb('#fa001e')->toArray());
        $this->assertSame([250, 0, 40], $this->converter()->hex2rgb('#fa0028')->toArray());
        $this->assertSame([250, 0, 50], $this->converter()->hex2rgb('#fa0032')->toArray());
        $this->assertSame([250, 0, 60], $this->converter()->hex2rgb('#fa003c')->toArray());
        $this->assertSame([250, 0, 70], $this->converter()->hex2rgb('#fa0046')->toArray());
    }

    public function testRgb(): void
    {
        $this->assertSame('#f0fa3c', $this->converter()->rgb2hex([240, 250, 60]));
        $this->assertSame('#f0fa46', $this->converter()->rgb2hex([240, 250, 70]));
        $this->assertSame('#f0fa50', $this->converter()->rgb2hex([240, 250, 80]));
        $this->assertSame('#f0fa5a', $this->converter()->rgb2hex([240, 250, 90]));
        $this->assertSame('#f0fa64', $this->converter()->rgb2hex([240, 250, 100]));
        $this->assertSame('#f0fa6e', $this->converter()->rgb2hex([240, 250, 110]));
        $this->assertSame('#f0fa78', $this->converter()->rgb2hex([240, 250, 120]));
        $this->assertSame('#f0fa82', $this->converter()->rgb2hex([240, 250, 130]));

        $this->assertSame('#fa0000', $this->converter()->rgb2hex([250, 0, 0]));
        $this->assertSame('#fa000a', $this->converter()->rgb2hex([250, 0, 10]));
        $this->assertSame('#fa0014', $this->converter()->rgb2hex([250, 0, 20]));
        $this->assertSame('#fa001e', $this->converter()->rgb2hex([250, 0, 30]));
        $this->assertSame('#fa0028', $this->converter()->rgb2hex([250, 0, 40]));
        $this->assertSame('#fa0032', $this->converter()->rgb2hex([250, 0, 50]));
        $this->assertSame('#fa003c', $this->converter()->rgb2hex([250, 0, 60]));
        $this->assertSame('#fa0046', $this->converter()->rgb2hex([250, 0, 70]));
    }

    protected function converter(): Converter
    {
        return new Converter;
    }
}
