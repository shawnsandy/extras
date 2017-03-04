<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/2/17
 * Time: 3:08 PM
 */

namespace ShawnSandy\Extras\Apps\Socialize\Twitter;

use App\User;
use Illuminate\Support\Facades\Input as Input;
use Thujohn\Twitter\Facades\Twitter as Twitter;
use Illuminate\Support\Facades\Session as Session;
use Illuminate\Support\Facades\Redirect as Redirect;

class TwitterAuth
{

    protected $redirect_url;


    public function __construct()
    {

    }

    /**
     * @param mixed $redirect_url
     * @return $this
     */
    public function redirectUrl($redirect_url)
    {
        $this->redirect_url = $redirect_url;
        return $this;
    }

    public function auth()
    {
        // your SIGN IN WITH TWITTER  button should point to this route
        $sign_in_twitter = true;
        $force_login = false;

        // Make sure we make this request w/o tokens, overwrite the default values in case of login.
        Twitter::reconfig(['token' => '', 'secret' => '']);
        $token = Twitter::getRequestToken($this->redirect_url);

        if (isset($token['oauth_token_secret'])) {
            $url = Twitter::getAuthorizeURL($token, $sign_in_twitter, $force_login);

            Session::put('oauth_state', 'start');
            Session::put('oauth_request_token', $token['oauth_token']);
            Session::put('oauth_request_token_secret', $token['oauth_token_secret']);

            return $url;
        }

        return false;

    }

    public function callback($return_on_fail = "/signup")
    {

        if (Session::has('oauth_request_token')) {
            $request_token = [
                'token' => Session::get('oauth_request_token'),
                'secret' => Session::get('oauth_request_token_secret'),
            ];

            Twitter::reconfig($request_token);

            $oauth_verifier = false;

            if (Input::has('oauth_verifier')) {
                $oauth_verifier = Input::get('oauth_verifier');
            }

            // getAccessToken() will reset the token for you
            $token = Twitter::getAccessToken($oauth_verifier);

            if (!isset($token['oauth_token_secret'])) {
                return Redirect::route($return_on_fail)->with('flash_error', 'We could not log you in on Twitter.');
            }

            $credentials = Twitter::getCredentials(['include_email' => "true"]);

            if (is_object($credentials) && !isset($credentials->error)) {
                // $credentials contains the Twitter user object with all the info about the user.
                // Add here your own user logic, store profiles, create new users on your tables...you name it!
                // Typically you'll want to store at least, user id, name and access tokens
                // if you want to be able to call the API on behalf of your users.

                // This is also the moment to log in your users if you're using Laravel's Auth class
                // Auth::login($user) should do the trick.

                Session::put('access_token', $token);

                $user = [
                    "id" => $credentials->id,
                    "nickname" => $credentials->screen_name,
                    "name" => $credentials->name,
                    "email" => $credentials->email,
                    "password" => bcrypt(str_random(9)),
                ];

                return $user;

            }

            return false;

        }

    }


}
