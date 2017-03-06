<?php
    use ShawnSandy\Extras\Apps\Socialize\Twitter\TwitterAuth;


    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 3/5/2017
     * Time: 12:17 AM
     */
    class TwitterTest extends Orchestra\Testbench\BrowserKit\TestCase
    {

        /**
         * Setup the test environment.
         */
        public function setUp()
        {
            parent::setUp();

            $this->baseUrl = "http://build.app";


        }

        protected function getPackageProviders($app)
        {
            return ['ShawnSandy\Extras\ExtrasServicesProvider'];
        }


        /**
         * Define environment setup.
         *
         * @param  \Illuminate\Foundation\Application $app
         * @return void
         */
        protected function getEnvironmentSetUp($app)
        {

            // Setup default database to use sqlite :memory:
            $app['config']->set('ttwitter.CONSUMER_KEY', 'Bdip4tNdR3duujz0s5Xojg');
            $app['config']->set('ttwitter.CONSUMER_SECRET', 'p148trSzne3uZhuZjmMwwuhJ3s00sIIUcKDM5YYgA');
            $app['config']->set('ttwitter.ACCESS_TOKEN', '041WCcApUqWO8jAFR3uet6FCmvnAT3jEM4bNzpFxv');
            $app['config']->set('ttwitter.ACCESS_TOKEN_SECRET', 's6xJtYNQuZDk9JqpUTiVMozKTAUshZBV9F6H6C1VzI');
            $app['config']->set('ttwitter.AUTHENTICATE_URL', 'https://api.twitter.com/oauth/authenticate');
            $app['config']->set('ttwitter.USE_SSL', TRUE);
            $app['config']->set('ttwitter.REQUEST_TOKEN_URL', 'https://api.twitter.com/oauth/request_token');
            $app['config']->set('services.twitter.redirect', 'http://build.app/extras/twitter/login');
            $app['config']->set('database.default', 'testbench');
            $app['config']->set('database.connections.testbench', [
                'driver' => 'sqlite',
                'database' => ':memory:',
                'prefix' => '',
            ]);

        }

        public function testReturnsTwitterAuthenticateUrl()
        {
            $twitter = new TwitterAuth();
            $url = $twitter->redirectUrl(config("services.twitter.redirect"))->auth();
            $str = explode("=", $url);
            $this->assertEquals(config('ttwitter.AUTHENTICATE_URL') . '?oauth_token', $str[0]);
        }

        public function testRoute()
        {

           $response = $this->action("GET", '\ShawnSandy\Extras\Apps\Socialize\SocialLoginController@index');

            print $response->status();
        }


    }
