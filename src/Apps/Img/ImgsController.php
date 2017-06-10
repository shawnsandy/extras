<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 1/10/2017
     * Time: 6:12 AM
     */

    namespace ShawnSandy\Extras\Apps\Img;


    use Extras;
    use Illuminate\Routing\Controller;

    class ImgsController extends Controller
    {

        /**
         * @param $dir
         * @param $path
         * @return mixed
         */
        public function storage($dir, $path)
        {
            return Extras::glide($path, $dir);
        }

        /**
         * @param       $photo
         * @param array $params
         * @return mixed
         */
        public function img($photo, $params = [])
        {
            return Extras::glidePublic($photo);
        }


    }

