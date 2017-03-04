<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/27/2017
     * Time: 11:47 PM
     */

    namespace ShawnSandy\Extras\Apps\Socialize;


    use Illuminate\Support\Facades\Facade;

    class SocalizerFacade extends Facade
    {

        public static function getFacadeAccessor() {
            return "Socialize";
        }

    }
