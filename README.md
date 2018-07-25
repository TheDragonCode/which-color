# Black or white text color?

A simple helper, helping to determine what color the text will look better over a monotonous color.

![black-or-white-text-color](https://user-images.githubusercontent.com/10347617/43231566-9f9cb208-9075-11e8-9143-89b904cc8306.png)

<p align="center">
    <a href="https://styleci.io/repos/142359733"><img src="https://styleci.io/repos/142359733/shield" alt="StyleCI" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/black-or-white-text-color"><img src="https://img.shields.io/packagist/dt/andrey-helldar/black-or-white-text-color.svg?style=flat-square" alt="Total Downloads" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/black-or-white-text-color"><img src="https://poser.pugx.org/andrey-helldar/black-or-white-text-color/v/stable?format=flat-square" alt="Latest Stable Version" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/black-or-white-text-color"><img src="https://poser.pugx.org/andrey-helldar/black-or-white-text-color/v/unstable?format=flat-square" alt="Latest Unstable Version" /></a>
    <a href="LICENSE"><img src="https://poser.pugx.org/andrey-helldar/black-or-white-text-color/license?format=flat-square" alt="License" /></a>
</p>


## Installation

To get the latest version of package, simply require the project using [Composer](https://getcomposer.org):

```
composer require andrey-helldar/black-or-white-text-color
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "andrey-helldar/black-or-white-text-color": "^1.0"
    }
}
```

If you don't use auto-discovery in Laravel Framework, add the `ServiceProvider` to the providers array in `config/app.php`:

```php
Helldar\BlackOrWhiteTextColor\ServiceProvider::class,
```

You can also publish the config file to change implementations (ie. interface to specific class):

```
php artisan vendor:publish --provider="Helldar\BlackOrWhiteTextColor\ServiceProvider"
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

use Helldar\BlackOrWhiteTextColor\Color;

return (new Color('#000000'))->isWhite(); // returned `TRUE`. 'A white text color is better for black background'
return (new Color('#ffffff'))->isBlack(); // returned `TRUE`. 'A black text color is better for white background'
```

Example colors map:
![map of colors](https://user-images.githubusercontent.com/10347617/43231090-85dfba92-9073-11e8-9dbc-d2968b5ef1a2.png)

Also in the [src/stubs](src/stubs/map.html) folder of the project you can find the generated file with the color definition example. The file contains previews for 17576 background colors.

You can also generate such a file yourself using class `Helldar\BlackOrWhiteTextColor\Map`:

```php
use Helldar\BlackOrWhiteTextColor\Map;

(new Map)->create($directory = null);
```

By default, the file will be saved to folder `src/stubs` of this package.

Also you can specify your own directory to save the file:

```php
$directory = '/foo/bar/baz';

(new Map)->create($directory);
```


## License

This package is released under the [MIT License](LICENSE).
