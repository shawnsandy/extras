<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 11:15 PM
     */

    namespace ShawnSandy\Extras\Apps\Maps;


    use Illuminate\Support\Facades\Facade;

    class MapsFacade extends Facade
    {

        protected static function getFacadeAccessor(){
            return "Gmap";
        }

    }
