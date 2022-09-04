<?php

namespace DragonCode\WhichColor\Services;

use DragonCode\WhichColor\Dto\RGB;
use DragonCode\WhichColor\Helpers\Weight;

class Color
{
    /**
     * Coefficient / Number of mistakes / Count of items to check.
     *
     * 0.00100   / 14%   / 125
     * 0.00079   / 11%   / 125
     * 0.00082   / 1.13% / 1331
     * 0.00084   / 0.45% / 1331
     * 0.000845  / 0.23% / 1331
     * 0.00085   / 0.23% / 1331
     * 0.00086   / 0.15% / 1331
     * 0.00087   / 0.15% / 1331
     * 0.00088   / 0.00% / 1331
     * 0.00096   / 16%   / 125
     * 0.00092   / 17%   / 125
     *
     * @var float
     */
    protected float $weight = 0.00088;

    protected RGB $rgb;

    public function __construct(
        protected Weight    $weights = new Weight(),
        protected Converter $convert = new Converter()
    ) {
    }

    public function of(array|string|RGB|null $hex = null): self
    {
        $instance = new static();

        return $instance->setHex($hex);
    }

    /**
     * Will return TRUE if dark color is better, or FALSE if light.
     *
     * @return bool
     */
    public function darkIsBetter(): bool
    {
        return $this->weights->getSum($this->rgb) < $this->weight;
    }

    /**
     * Will return TRUE if light is better, or FALSE if dark.
     *
     * @return bool
     */
    public function lightIsBetter(): bool
    {
        return ! $this->darkIsBetter();
    }

    public function setHex(array|string|RGB|null $hex): self
    {
        if ($hex) {
            $this->rgb = $this->parseHex($hex);
        }

        return $this;
    }

    protected function parseHex(array|string|RGB $hex): RGB
    {
        return $this->convert->hex2rgb($hex);
    }
}
