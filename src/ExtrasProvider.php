<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 5/27/2017
     * Time: 7:37 PM
     */

    namespace ShawnSandy\Extras;

    use Illuminate\Support\ServiceProvider;

    class ExtrasProvider extends ServiceProvider
    {

        /**
         * Perform post-registration booting of services.
         *
         * @return void
         */
        public function boot()
        {
            if (!$this->app->routesAreCached()) {
                include __DIR__ . '/routes.php';
            }
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
                [__DIR__ . '/config/config.php' => config_path('extras.php')],
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
            });
            $this->app->bind(
                'Gmap', function () {
                return new Maps();
            });
            $this->app->bind('Socialize', function () {
                return new Socializer();
            });
            $this->app->bind('twitterauth', function () {
                return new TwitterAuth();
            });
        }

    }
