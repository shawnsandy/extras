<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/28/2017
     * Time: 8:02 PM
     */

    namespace ShawnSandy\Extras\Apps\Socialize\Twitter;


    use Auth;
    use App\User;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Redirect;


    class TwitterLoginController extends Controller
    {

        public $twitter;

        public function __construct(TwitterAuth $twitterAuth)
        {
            $this->twitter = $twitterAuth;
        }


        public function index()
        {
            $url = $this->twitter->redirectUrl(config("services.twitter.redirect"))->auth();

            if ($url)
                return redirect($url);

            return back()->with("error", "Sorry we failed to connect");

        }

        /**
         * Handles the request from the provider
         * @return Redirect
         * @internal param Request $request
         * @internal param Request $request
         */
        public function auth()
        {

            if(!$user = $this->twitter->callback())
                return redirect("/signup")->with("error", "Failed to verify your credentials please try again");



            if (! $login = User::firstOrCreate(["email" => $user['email']], $user))
                return redirect("/signup")->with("error", "Whoops, failed to create your account, try again or contact support");


            Auth::login($login, TRUE);

            return redirect('/');

        }

    }
