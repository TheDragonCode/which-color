<?php

namespace DragonCode\WhichColor\Dto;

use DragonCode\SimpleDataTransferObject\DataTransferObject;

class RGB extends DataTransferObject
{
    public int $red = 0;

    public int $green = 0;

    public int $blue = 0;

    public function toArray(): array
    {
        return [
            $this->red,
            $this->green,
            $this->blue,
        ];
    }
}
