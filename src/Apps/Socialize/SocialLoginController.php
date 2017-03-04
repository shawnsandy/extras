<?php

    namespace ShawnSandy\Extras\Apps\Socialize;

    use App;
    use App\User;
    use Auth;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller;
    use Illuminate\Session\Store as Session;
    use Illuminate\Support\Facades\Redirect;


    /**
     * Class GithubLoginController
     *
     * @package \ShawnSandy\PageKit\Controllers
     */
    class SocialLoginController extends Controller
    {


        protected $socializer;

        protected $redirectTo ="/";

        /**
         * SocialLoginController constructor.
         *
         * @internal param Session $session
         */
        public function __construct()
        {
            $this->socializer = App::make('ShawnSandy\Extras\Apps\Socialize\Socializer');
            $this->socializer->setProvider('github')
                ->setScopes(['user']);
        }

        /**
         * Auth sends off the request to the provider
         * @return mixed
         */
        public function index()
        {
            return $this->socializer->authorize();
        }

        /**
         * Handles the request from the provider
         *
         * @return Redirect
         */
        public function auth()
        {

            if ($user = $this->socializer->login()):

                $login = User::firstOrCreate(["email" => $user['email']], $user);
                Auth::login($login);
                return redirect($this->redirectTo)->with("success", "You are logged in");

            endif;

            return redirect($this->redirectTo)->with("error", "Failed to login please try again");

        }

    }
