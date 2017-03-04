<?php
/**
 * Created by PhpStorm.
 * User: Shawn
 * Date: 2/27/2017
 * Time: 5:38 AM
 */

namespace ShawnSandy\Extras\Apps\Socialize;


class LinkedInLoginController extends SocialLoginController
{

    public function __construct()
    {
        parent::__construct();

        $this->socializer->setProvider('linkedin')->setScopes(['r_basicprofile']);

    }

}
