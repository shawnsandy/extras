<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 2/28/17
 * Time: 9:28 AM
 */

namespace ShawnSandy\Extras\Apps\Socialize;


use Laravel\Socialite\Facades\Socialite;

class FacebookLoginController extends SocialLoginController
{

    public function __construct()
    {
        parent::__construct();

        $this->socializer->setProvider('facebook')->setScopes(['public_profile', 'email', 'user_friends']) ;

    }


}
