<?php

namespace Helldar\BlackOrWhiteTextColor\Services;

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

    /**
     * @var array
     */
    private $rgb;

    /**
     * Color constructor.
     *
     * @param string $hex
     */
    public function __construct($hex = '#000000')
    {
        $this->rgb = (new Convert)->hex2rgb($hex);
    }

    /**
     * Will return TRUE if black is better, or FALSE if white.
     *
     * @return bool
     */
    public function isBlack()
    {
        $font_color = $this->run();

        return $font_color < $this->weight;
    }

    /**
     * Will return TRUE if white is better, or FALSE if black.
     *
     * @return bool
     */
    public function isWhite()
    {
        return !$this->isBlack();
    }

    /**
     * Neuron network, which determines the color of the text for a specific background.
     *
     * @return float
     */
    private function run()
    {
        $colors = $this->getColorsWeights();
        $output = 0;

        foreach ($colors as $color) {
            $sum = $color['bias'];
            $i   = 0;

            foreach ($color['weights'] as $keyColor => $valueColor) {
                $sum += $valueColor * $this->rgb[$i];
                $i++;
            }

            $output += (1 / (1 + abs($sum)));
        }


        return $output;
    }

    /**
     * @return array
     */
    private function getColorsWeights()
    {
        $path = __DIR__ . '/../config/colors.php';

        return include $path;
    }
}
