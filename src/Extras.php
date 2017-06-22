<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:03 PM
     */

    namespace ShawnSandy\Extras;


    use League\Glide\Responses\LaravelResponseFactory;
    use Illuminate\Contracts\Filesystem\Filesystem;
    use Illuminate\Support\HtmlString;
    use League\Glide\ServerFactory;

    class Extras
    {

        public function routes()
        {
            require __DIR__ . '/routes.php';
        }


        public function getView($view)
        {
            return \View::make("extras::partials.test");
        }

        public function toHtmlString($html_String)
        {
            return new HtmlString($html_String);
        }


        /**
         * @param                                                                           $path
         * @param                                                                           $dir
         * @return mixed
         */
        public function glide($path, $dir)
        {

            $filesystem = app(Filesystem::class);
            $server = ServerFactory::create([
                'response' => new LaravelResponseFactory(app('request')),
                'source' => $filesystem->getDriver(),
                'cache' => $filesystem->getDriver(),
                'source_path_prefix' => '/' . $dir,
                'cache_path_prefix' => '/.cache',
                'base_url' => '/glide/'
            ]);

            return $server->getImageResponse($path, request()->all());
        }


        /**
         * @param $photo
         */
        public function glidePublic($dir, $photo)
        {
            $server = ServerFactory::create([
                'source' => "$dir/",
                'cache' => "./",
                'source_path_prefix' => '/',
                'cache_path_prefix' => '/.cache',
            ]);

            return $server->outputImage($photo, request()->all());
        }


    }
