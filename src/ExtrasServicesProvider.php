<?php

namespace ShawnSandy\Extras;

use ShawnSandy\Extras\Apps\Maps\Maps;
use Illuminate\Support\ServiceProvider;
use ShawnSandy\Extras\Apps\Socialize\Socializer;
use ShawnSandy\Extras\Apps\Socialize\Twitter\TwitterAuth;


/**
 * ass Provider
 *
 * @package ShawnSandy\PkgStart
 */
class ExtrasServicesProvider extends ServiceProvider
{


    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // 		if (!$this->app->routesAreCached()) {
        // 			include __DIR__ . '/routes.php';
        //


        /**
         * Package views
         */
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'extras');

        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/vendor/extras'),
            ], 'extras-views'
        );


        /**
         * Package assets
         */
        $this->publishes(
            [
                __DIR__ . '/resources/assets/js/' => public_path('assets/extras/js/'),
                __DIR__ . '/public/assets/' => public_path('assets/')
            ], 'extras-assets'
        );


        /**
         * Package config
         */
        $this->publishes(
            [__DIR__ . '/config/config.php' => config_path('extras/settings.php')],
            'extras-config'
        );

        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . '/Helpers/helper.php';
        endif;

        include_once __DIR__ . "/components/extras.php";


    }


    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

        $this->mergeConfigFrom(
            __DIR__ . '/config/config.php', 'extras'
        );

        $this->app->bind(
            'Extras', function () {
            return new Extras();
        }
        );

        $this->app->bind(
            'Gmap', function () {
            return new Maps();
        }
        );

        $this->app->bind('Socialize', function () {
            return new Socializer();
        }
        );

        $this->app->bind('twitterauth', function () {
            return new TwitterAuth();
        }
        );

        $this->loadProviders();

        $this->loadAliases();


    }

    public function loadProviders()
    {


        /*
        * load service providers
                                                     */

        $this->app->register('Mews\Purifier\PurifierServiceProvider');
        $this->app->register('Thujohn\Twitter\TwitterServiceProvider');
        $this->app->register('Brotzka\DotenvEditor\DotenvEditorServiceProvider');
        $this->app->register('Zondicons\ZondiconsServiceProvider');


        if (app()->version() < 5.5):

            $this->app->register(\Collective\Remote\RemoteServiceProvider::class);
            $this->app->register(\Collective\Html\HtmlServiceProvider::class);
            $this->app->register('Laravel\Socialite\SocialiteServiceProvider');
            $this->app->register(\Plank\Mediable\MediableServiceProvider::class);
            $this->app->register('Rap2hpoutre\LaravelLogViewer\LaravelLogViewerServiceProvider');
            $this->app->register(\Spatie\CollectionMacros\CollectionMacroServiceProvider::class);
            $this->app->register(\AlbertCht\InvisibleReCaptcha\InvisibleReCaptchaServiceProvider::class);

        endif;


        /*
        * Dev resources
                                                     */

        if ($this->app->environment() !== "production") {

            $this->app->register('Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');

        }


    }

    public function loadAliases()
    {


        /*
        * Load aliases / facades
                                                     */
        $aliases = \Illuminate\Foundation\AliasLoader::getInstance();


        $aliases->alias('Purifier', 'Mews\Purifier\Facades\Purifier::class');
        $aliases->alias("Twitter", 'Thujohn\Twitter\Facades\Twitter::class');
        $aliases->alias('DotenvEditor', 'Brotzka\DotenvEditor\DotenvEditorFacade');


        /** add support for 5.5 **/
        if (app()->version() < 5.5):
            $aliases->alias("Html", \Collective\Html\HtmlFacade::class);
            $aliases->alias("Form", \Collective\Html\FormFacade::class);
            $aliases->alias('Socialite', 'Laravel\Socialite\Facades\Socialite');
            $aliases->alias('Gmap', \ShawnSandy\Extras\Apps\Maps\MapsFacade::class);
            $aliases->alias('MediaUploader', \Plank\Mediable\MediaUploaderFacade::class);
        endif;


        /*
        * Dev resources
                                                   */

        if ($this->app->environment() !== "production") {


        }


    }


}
