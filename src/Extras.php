<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:03 PM
     */

    namespace ShawnSandy\Extras;


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

        public function gmap() {

        }


    }
