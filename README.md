{
    "name": "shawnsandy/extras",
    "type": "library",
    "description": "Laravel descriptions",
    "keywords": [
        "shawnsandy",
        "extras"
    ],
    "homepage": "https://github.com/shawnsandy/extras",
    "license": "MIT",
    "authors": [{
        "name": "Shawn Sandy",
        "email": "shawnsandy04@gmail.com",
        "homepage": "https://github.com/shawnsandy",
        "role": "Developer"
    }],
    "require": {
        "php": "~5.6|~7.0",
        "abraham/twitteroauth": "^0.7.2",
        "laravelcollective/html": "^5.3.0",
        "laravelcollective/remote": "^5.3.0",
        "league/glide-laravel": "^1.0",
        "laravel/socialite": "^2.0",
        "thujohn/twitter": "^2.2"
    },
    "require-dev": {
        "orchestra/testbench": "~3.3",
        "orchestra/testbench-browser-kit": "~3.3",
        "phpunit/phpunit": "~4.0||~5.0",
        "squizlabs/php_codesniffer": "^2.3",
        "illuminate/support": "~5.0"
    },
    "autoload": {
        "psr-4": {
            "ShawnSandy\\Extras\\": "src"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "ShawnSandy\\Extras\\": "tests"
        }
    },
    "scripts": {
        "test": "phpunit",
        "check-style": "phpcs -p --standard=PSR2 --runtime-set ignore_errors_on_exit 1 --runtime-set ignore_warnings_on_exit 1 src tests",
        "fix-style": "phpcbf -p --standard=PSR2 --runtime-set ignore_errors_on_exit 1 --runtime-set ignore_warnings_on_exit 1 src tests"
    },
    "extra": {
        "branch-alias": {
            "dev-master": "1.0-dev"
        }
    },
    "config": {
        "sort-packages": true
    }
}    'Extras' => \ShawnSandy\Extras\ExtrasFacade::class,
    'Gmap' => \ShawnSandy\Extras\Apps\Maps\MapsFacade::class,
    "Twitter" => \Thujohn\Twitter\Facades\Twitter::class,  

   // ###  
    ]

```

 __Routes__

``` php

Route::group(['prefix' => "extras"], function () {
    Extras::routes();
});

`````



## Usage

``` php

// coming soon

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash

$ composer test

```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email shawnsandy04@gmail.com instead of using the issue tracker.

## Credits

- [Shawn Sandy][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/shawnsandy/extras.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/shawnsandy/extras/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/shawnsandy/extras.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/shawnsandy/extras.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/shawnsandy/extras.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/shawnsandy/extras
[link-travis]: https://travis-ci.org/shawnsandy/extras
[link-scrutinizer]: https://scrutinizer-ci.com/g/shawnsandy/extras/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/shawnsandy/extras
[link-downloads]: https://packagist.org/packages/shawnsandy/extras
[link-author]: https://github.com/shawnsandy

