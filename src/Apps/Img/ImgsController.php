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
         * @param $dir
         * @param $photo
         * @return mixed
         * @internal param array $params
         */
        public function img($dir, $photo)
        {
            return Extras::glidePublic($dir, $photo);
        }


    }

