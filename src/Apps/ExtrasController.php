<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 2/24/17
 * Time: 12:26 PM
 */

namespace ShawnSandy\Extras\Apps;


use App\Http\Controllers\Controller;

class ExtrasController extends Controller
{

    public function __construct()
    {
        if(env("APP_DEBUG") === false)
            return back()->with("message", "Access blocked");
    }

    public function mail() {
        return view("extras::messages");
    }

    public function socialize() {
        return view('extras::socialize');
    }


}
