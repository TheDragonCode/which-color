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

```
composer require dragon-code/which-color
```

Instead, you may of course manually update your require section and run `composer update` if you so choose:

```json
{
    "require": {
        "dragon-code/which-color": "^3.0"
    }
}
```

The package can be used without any problems without any framework, connecting the necessary files through the function `require`.


### Upgrade from `andrey-helldar/which-color`

1. Replace `"andrey-helldar/which-color": "^2.0"` with `"dragon-code/which-color": "^3.0"` in the `composer.json` file;
2. Replace the `DragonCode\WhichColor` namespace prefix with `DragonCode\WhichColor` in your application;
3. Call the `composer update` console command.

## Using


The package helps to determine what color it is better to write text over a monotonous color.

```php
use DragonCode\WhichColor\Services\Color;

return (new Color('#000000'))->isLight(); // returned `TRUE`. 'A white text color is better for black background'
return (new Color('#ffffff'))->isDark(); // returned `TRUE`. 'A black text color is better for white background'

return (new Color())->of('#000000')->isLight(); // returned `TRUE`. 'A white text color is better for black background'
return (new Color())->of('#ffffff')->isDark(); // returned `TRUE`. 'A black text color is better for white background'
```

### Laravel / Lumen Frameworks

Inside Laravel or Lumen applications, you can use the `Color` facade:

```php
use DragonCode\WhichColor\Facades\Color;

$color = Color::of('#000000');
$color->isLight(); // returned `TRUE`. 'A light text color is better for dark background'
$color->isDark(); // returned `FALSE`. 'A dark text color is better for light background'

$color = Color::of('#ffffff')->isDark();
$color->isLight(); // returned `TRUE`. 'A dark text color is better for light background'
$color->isDark(); // returned `TRUE`. 'A light text color is better for dark background'
```

## Color map

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
