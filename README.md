# What is the best text color?

A simple helper, helping to determine what color the text will look better over a monotonous color.

![which-color](https://user-images.githubusercontent.com/10347617/43231566-9f9cb208-9075-11e8-9143-89b904cc8306.png)

<p align="center">
    <a href="https://styleci.io/repos/142359733"><img src="https://styleci.io/repos/142359733/shield" alt="StyleCI" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/which-color"><img src="https://img.shields.io/packagist/dt/andrey-helldar/which-color.svg?style=flat-square" alt="Total Downloads" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/which-color"><img src="https://poser.pugx.org/andrey-helldar/which-color/v/stable?format=flat-square" alt="Latest Stable Version" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/which-color"><img src="https://poser.pugx.org/andrey-helldar/which-color/v/unstable?format=flat-square" alt="Latest Unstable Version" /></a>
    <a href="LICENSE"><img src="https://poser.pugx.org/andrey-helldar/which-color/license?format=flat-square" alt="License" /></a>
</p>

## Installation

To get the latest version of package, simply require the project using [Composer](https://getcomposer.org):

```
composer require andrey-helldar/which-color
```

Instead, you may of course manually update your require section and run `composer update` if you so choose:

```json
{
    "require": {
        "andrey-helldar/which-color": "^2.0"
    }
}
```

Now you can use a `black_is_better_text_color($hex = '#000000')` helper.

The package can be used without any problems without any framework, connecting the necessary files through the function `require`.

## Using

The package helps to determine what color it is better to write text over a monotonous color.

To use, you can call the helper function or directly access the class:

```php
return black_is_better_text_color('#000000'); // returned `FALSE`. 'A black text color not better for black background'
return black_is_better_text_color('#ffffff'); // returned `TRUE`. 'A black text color is better for white background'

return black_is_better_text_color('#000'); // returned `FALSE`. 'A black text color not better for black background'
return black_is_better_text_color('#fff'); // returned `TRUE`. 'A black text color is better for white background'

return black_is_better_text_color([0, 0, 0]); // returned `FALSE`. 'A black text color not better for black background'
return black_is_better_text_color([255, 255, 255]); // returned `TRUE`. 'A black text color is better for white background'

// Also available a short function:
return black_is_better('#000000'); // returned `FALSE`. 'A black text color not better for black background'
return black_is_better('#ffffff'); // returned `TRUE`. 'A black text color is better for white background'

use Helldar\WhichColor\Services\Color;

return (new Color('#000000'))->isLight(); // returned `TRUE`. 'A white text color is better for black background'
return (new Color('#ffffff'))->isDark(); // returned `TRUE`. 'A black text color is better for white background'

return (new Color())->of('#000000')->isLight(); // returned `TRUE`. 'A white text color is better for black background'
return (new Color())->of('#ffffff')->isDark(); // returned `TRUE`. 'A black text color is better for white background'
```

Example colors map:
![map of colors](https://user-images.githubusercontent.com/10347617/43231090-85dfba92-9073-11e8-9dbc-d2968b5ef1a2.png)

### Laravel / Lumen Frameworks

Inside Laravel or Lumen applications, you can use the `Color` facade:

```php
use Helldar\WhichColor\Facades\Color;

$color = Color::of('#000000');
$color->isLight(); // returned `TRUE`. 'A light text color is better for dark background'
$color->isDark(); // returned `FALSE`. 'A dark text color is better for light background'

$color = Color::of('#ffffff')->isDark();
$color->isLight(); // returned `TRUE`. 'A dark text color is better for light background'
$color->isDark(); // returned `TRUE`. 'A light text color is better for dark background'
```
