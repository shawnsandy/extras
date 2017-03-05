# Laravel Extras (Beta)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Extras is small Laravel package that contains some basic components (functions) that are usually required for most apps but are not neccessarialy included in the base Laravel install.

- Social Login 
- Messaging (mail)
- Maps (google)
- Glide for Dynamic images 
- Blades (login, register, alerts, contact...)

__Coming Soon__

- Toastr alerts
- Notifications
- Push notifications
- Backups


## Install

Via Composer

``` bash

$ composer require shawnsandy/extras

```

Open `config\app.php` and add the following

* __Providers array__

``` php

'providers' => [
   
    ShawnSandy\Extras\ExtrasServicesProvider::class,
    Thujohn\Twitter\TwitterServiceProvider::class,        
    Collective\Html\HtmlServiceProvider::class,

    // ###
]

```

* __Aliases array__

``` php
    'aliases' => [

    'Form' => Collective\Html\FormFacade::class,
    'Html' => Collective\Html\HtmlFacade::class,
    'Extras' => \ShawnSandy\Extras\ExtrasFacade::class,
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

