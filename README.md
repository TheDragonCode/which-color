# What is the best text color?

<img src="https://preview.dragon-code.pro/TheDragonCode/which-color.svg?brand=php" alt="Which Color"/>

A simple helper, helping to determine what color the text will look better over a monotonous color.

[![Stable Version][badge_stable]][link_packagist]
[![Unstable Version][badge_unstable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![Github Workflow Status][badge_build]][link_build]
[![License][badge_license]][link_license]


## Installation


To get the latest version of package, simply require the project using [Composer](https://getcomposer.org):

```bash
composer require dragon-code/which-color
```

Instead, you may of course manually update your require section and run `composer update` if you so choose:

```json
{
    "require": {
        "dragon-code/which-color": "^4.0"
    }
}
```

## Using

The package helps to determine what color it is better to write text over a monotonous color.

```php
use DragonCode\WhichColor\Facades\Color;

return Color::of('#000000')->lightIsBetter(); // returned `true`. A white text color is better for black background.
return Color::of('#ffffff')->darkIsBetter(); // returned `true`. A black text color is better for white background.

return Color::of('#000000')->lightIsBetter(); // returned `true`. A white text color is better for black background.
return Color::of('#ffffff')->darkIsBetter(); // returned `true`. A black text color is better for white background.
```

You can also use the converter:

```php
use DragonCode\WhichColor\Services\Converter;

$converted = new Converter();

$rgb = $converted->hex2rgb('#fa000a'); // RGB object with [250, 0, 10]
// $rgb->red; // 250
// $rgb->green; // 0
// $rgb->blue; // 10
// $rgb->toArray(); // [250, 0, 10]

$converted->hex2rgb('#f5a'); // RGB object with [255, 85, 170]

$converted->rgb2hex($rgb); // '#fa000a'
$converted->rgb2hex([250, 0, 10]); // '#fa000a'
$converted->rgb2hex(['red' => 250, 'green' => 0, 'blue' => 10]); // '#fa000a'
$converted->rgb2hex(['r' => 250, 'g' => 0, 'b' => 10]); // '#fa000a'
```

## Simple Color Map

![map of colors](https://user-images.githubusercontent.com/10347617/43231090-85dfba92-9073-11e8-9dbc-d2968b5ef1a2.png)


## License

This package is licensed under the [MIT License](LICENSE).


[badge_build]:          https://img.shields.io/github/workflow/status/TheDragonCode/which-color/phpunit?style=flat-square

[badge_downloads]:      https://img.shields.io/packagist/dt/dragon-code/which-color.svg?style=flat-square

[badge_license]:        https://img.shields.io/packagist/l/dragon-code/which-color.svg?style=flat-square

[badge_stable]:         https://img.shields.io/github/v/release/TheDragonCode/which-color?label=stable&style=flat-square

[badge_unstable]:       https://img.shields.io/badge/unstable-dev--main-orange?style=flat-square

[link_build]:           https://github.com/TheDragonCode/which-color/actions

[link_license]:         LICENSE

[link_packagist]:       https://packagist.org/packages/dragon-code/which-color
