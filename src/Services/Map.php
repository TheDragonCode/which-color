<?php

namespace Helldar\BlackOrWhiteTextColor\Services;

class Map
{
    /**
     * @var \Helldar\BlackOrWhiteTextColor\Services\Convert
     */
    private $convert;

    /**
     * @var string
     */
    private $template = '<div style="background-color: rgb(%s); color: %s;"><p>rgb(%s)</p><p>%s</p></div>';

    public function __construct()
    {
        $this->convert = new Convert();
    }

    /**
     * @param string|null $directory
     */
    public function create($directory = null)
    {
        $result = '';
        $step   = 10;
        $count  = 0;

        for ($r = 0; $r <= 255; $r++) {
            if (($r % $step) !== 0) {
                continue;
            }

            for ($g = 0; $g <= 255; $g++) {
                if (($g % $step) !== 0) {
                    continue;
                }

                for ($b = 0; $b <= 255; $b++) {
                    if (($b % $step) !== 0) {
                        continue;
                    }

                    $result .= $this->block($r, $g, $b);
                    $count++;
                }
            }
        }

        $this->store($result, $count, $directory);
    }

    /**
     * @param int $red
     * @param int $green
     * @param int $blue
     *
     * @return string
     */
    private function block($red = 0, $green = 0, $blue = 0)
    {
        $rgb = [$red, $green, $blue];
        $hex = $this->convert->rgb2hex($rgb);

        $rgb_tpl    = implode(',', $rgb);
        $text_color = (new Color($rgb))->isBlack() ? 'black' : 'white';

        return sprintf($this->template, $rgb_tpl, $text_color, $rgb_tpl, $hex);
    }

    /**
     * @param string $content
     * @param int $count
     * @param null $directory
     */
    private function store($content, $count = 0, $directory = null)
    {
        $path = $directory ? $this->strFinish($directory, '/') : __DIR__ . '/../stubs/';
        $page = file_get_contents($path . 'map.stub');

        $content = str_replace(['{{content}}', '{{count}}'], [$content, $count], $page);

        file_put_contents($path . 'map.html', $content);
    }

    /**
     * Cap a string with a single instance of a given value.
     *
     * @param string $value
     * @param string $cap
     *
     * @return string
     */
    private function strFinish($value, $cap)
    {
        $quoted = preg_quote($cap, '/');

        return preg_replace('/(?:' . $quoted . ')+$/u', '', $value) . $cap;
    }
}
