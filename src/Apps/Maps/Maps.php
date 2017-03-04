<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/23/2017
     * Time: 8:44 PM
     */

    namespace ShawnSandy\Extras\Apps\Maps ;


    class Maps
    {

        public function __construct()
        {
        }

        public function getMapData($address)
        {
            $map_address = urlencode($address);
            $map_url = "https://maps.googleapis.com/maps/api/geocode/json?address={$map_address}&key=AIzaSyArUKdQIBN_lzsFpM7JiMq0DNfD9q0qmVE";
            $map_data = json_decode(file_get_contents($map_url));
            $map_info = [
                "lat" => $map_data->results[0]->geometry->location->lat,
                "lng" => $map_data->results[0]->geometry->location->lng,
                "address" => $map_data->results[0]->formatted_address,
                "id" => $map_data->results[0]->place_id,
            ];
            return $map_info;
        }

    }
