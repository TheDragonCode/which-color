<?php

namespace DragonCode\WhichColor\Services;

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
    private $weight = 0.00088;

    /** @var array */
    private $rgb;

    /**
     * Color constructor.
     *
     * @param string|null $hex
     */
    public function __construct($hex = null)
    {
        if ($hex) {
            $this->rgb = $this->parseHex($hex);
        }
    }

    public function of(string $hex): self
    {
        return new self($hex);
    }

    /**
     * Will return TRUE if dark color is better, or FALSE if light.
     *
     * @return bool
     */
    public function isDark(): bool
    {
        $font_color = $this->run();

        return $font_color < $this->weight;
    }

    /**
     * Will return TRUE if light is better, or FALSE if dark.
     *
     * @return bool
     */
    public function isLight(): bool
    {
        return ! $this->isDark();
    }

    /**
     * Neuron network, which determines the color of the text for a specific background.
     *
     * @return float
     */
    protected function run(): float
    {
        $colors = $this->getColorsWeights();
        $output = 0;

        foreach ($colors as $color) {
            $sum = $color['bias'];
            $i   = 0;

            foreach ($color['weights'] as $keyColor => $valueColor) {
                $sum += $valueColor * $this->rgb[$i];
                ++$i;
            }

            $output += (1 / (1 + abs($sum)));
        }

        return $output;
    }

    protected function parseHex($hex = null): array
    {
        return (new Convert())->hex2rgb($hex);
    }

    protected function getColorsWeights(): array
    {
        $path = __DIR__ . '/../config/colors.php';

        return include $path;
    }
}
