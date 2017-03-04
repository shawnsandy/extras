<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 2/24/17
 * Time: 11:44 AM
 */

namespace ShawnSandy\Extras\Apps\Messaging;


use Log;
use Mail;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {

        $data = $request->except('_token');

        $default_info = [
            'from' => config("extras.messages.from", "email@yourdomain.com"),
            'name' => config("extras.messages.name", "Message Name"),
        ];

        $data = array_merge($default_info, $data);

        try {
            Mail::to(config("mail.from.address", 'design@ctsfla.com'))->send(new Messages($data));
        } catch (Exception $e) {
            Log::error("Failed to send message : ".$e->getMessage());
            return back()->with("error", "Failed to send message");
        }
        return back()->with('success', "Your message was sent thank you.");

    }

}
