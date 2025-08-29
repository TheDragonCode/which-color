<?php

declare(strict_types=1);

namespace DragonCode\WhichColor\Data;

class RGB
{
    public function __construct(
        public int $red = 0,
        public int $green = 0,
        public int $blue = 0,
    ) {}

    public function toArray(): array
    {
        return [
            $this->red,
            $this->green,
            $this->blue,
        ];
    }
}
