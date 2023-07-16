<?php

namespace DragonCode\WhichColor\Helpers;

use DragonCode\WhichColor\Dto\RGB;

class Weight
{
    protected array $values = [
        [
            'bias'    => 11.745516515373442,
            'weights' => [
                'r' => -7.519911897323802,
                'g' => -22.652120323779155,
                'b' => 4.813164438275843,
            ],
        ],
        [
            'bias'    => -15.223140227830843,
            'weights' => [
                'r' => 9.440186067885572,
                'g' => 15.204499965473516,
                'b' => 3.9459821787246416,
            ],
        ],
        [
            'bias'    => 12.02540625799917,
            'weights' => [
                'r' => -2.6499242033759454,
                'g' => -12.285974328003576,
                'b' => -15.477070825021912,
            ],
        ],
    ];

    protected float $output = 0;

    public function getSum(RGB $rgb): float
    {
        $this->calc($rgb);

        return $this->output;
    }

    /**
     * Neuron network, which determines the color of the text for a specific background.
     */
    protected function calc(RGB $rgb): void
    {
        foreach ($this->values as $value) {
            ['bias' => $bias, 'weights' => $weights] = $value;

            $bias = $this->process($bias, $weights['r'], $rgb->red);
            $bias = $this->process($bias, $weights['g'], $rgb->green);
            $bias = $this->process($bias, $weights['b'], $rgb->blue);

            $this->output += (1 / (1 + abs($bias)));
        }
    }

    protected function process(float $bias, float $weight, float $color): float
    {
        return ($weight * $color) + $bias;
    }
}
