<?php


namespace ShawnSandy\Extras\Apps\Socialize;

use Log;
use Session;
use App\User;
use Exception;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite as Socialite;


/**
 * Class Socializer
 *
 * @package ShawnSandy\PageKit\Classes
 */
class Socializer
{

    protected $provider;

    protected $scopes;

    /**
     * Socializer constructor.
     *
     */
    public function __construct()
    {

    }

    public function authorize()
    {
        return Socialite::driver($this->provider)->scopes($this->scopes)->redirect();
    }

    /**
     * Handles the request from the provider
     *
     * @param Request $
     * @return mixed
     * @internal param Request $request
     */
    public function login()
    {

        try {
            $credentials = Socialite::driver($this->provider)->user();
        } catch (Exception $e) {
            Log::error("Socialize " . $e->getMessage());
            Session::flash("error", "Login Failed");
            return false;
        }

        $user = [
            "id" => $credentials->getId(),
            "mickname" => $credentials->getNickname(),
            "name" => $credentials->getName(),
            "email" => $credentials->getEmail(),
            "password" => bcrypt(str_random(9)),
        ];

        $this->userSession($credentials);
        return $user;

    }

    /**
     * @param $user
     * @internal param Request $request
     */
    public function userSession($user)
    {
        session()->put(
            $this->provider . "_session_key", [
                'provider_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'token' => $user->token,
                'token_secret' => isset($user->tokenSecret) ? $user->tokenSecret : null ,
                'time_stamp' => Carbon::now()->toDateTimeString()
            ]
        );
    }


    /**
     * Find or register user based on socialite credentials
     * checks to see if the user exists
     * or create a new user from user socialite credentials
     *
     * @param  $user
     * @return User object
     */
    public function findOrRegister($user = [])
    {
        if ($login = User::where('email', $user['email'])->first()) :
            return $login;
        else :
            $user["password"] = bcrypt(str_random(9));
            $login = User::create($user);
        endif;
        return $login;
    }



    public function setProvider($provider)
    {

        $this->provider = $provider;
        return $this;

    }

    public function setScopes($scopes = [])
    {

        $this->scopes = $scopes;
        return $this;

    }

}
