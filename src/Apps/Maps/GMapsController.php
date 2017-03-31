<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 2/22/17
 * Time: 10:28 AM
 */

namespace ShawnSandy\Extras\Apps\Maps;


use Illuminate\Routing\Controller;

class GMapsController extends Controller
{

    public function __construct()
    {
    }

    public function __invoke()
    {

        return view("extras::gmaps");
    }

}
