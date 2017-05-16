# Laravel Extras (Beta)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Extras is small Laravel package that contains some basic components (functions) that are usually required for most apps but are not necessarily included in the base Laravel install.

- Social Login 
- Messaging (mail)
- Maps (google)
- Glide for Dynamic images 
- Components (login, register, alerts, contact...)

__Coming Soon__

- Toastr alerts
- Notifications
- Push notifications
- Backups

### [Read the docs](/docs)

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

__Custom Error Pages__

``` php

  if (env("APP_DEBUG") == false && env("APP_ENV") === "production"):

            return app(SystemErrors::class)->renderErrors($request, $exception);

  endif;
  
```

__GMAPS (google maps) component__


``` php

{{ Html::extrasMap(
    "1600 Pennsylvania Ave NW, Washington, DC 20500", //address
    ["height" => '680px'], // inline style
    ['zoom' => 17, 'scroll' => 'true' ] // options map-zoom / scroll
    ) 
    }}

```

__Socialite SignIn__

``` php

 {{ Html::networkLogin(

     "Connect Via Social Media",  // title
     ["facebook", "twitter"] // providers (facebook, twitter, linkedin, github)
     
     ) }}

 ```

 __Laravel login component__ displays a login form

 ``` php
 
 {{ Html::extrasLogin("Login Title Here") }}

 ```

 __Dynamic Images with Glide__ 

 ``` php
 
 // from public/img 
{{ Html::extrasImg("bg/01.jpg?w=500", ["class" => "img-circle", "alt" => "Glide image"]) }}

// from your storage directory
{{ Html::extrasImg("photo1.jpg?w=500", ["class" => "img-responsive", "alt" => "Glide image"], "/extras/img/") }}


 ```


__SVG ICONS___

[Material Icons](https://material.io/icons/)

``` php

 {{ Html::materialIcon("material-add-circle") }
 
```


 [Entypo Icons](http://www.entypo.com/)

 ``` php 
 
  {{ Html::entypoIcon("entypo-adjust") }}
  
```


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash

// $ composer test

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

