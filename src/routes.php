<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */

use Illuminate\Support\Facades\Request;

Route::get('gmap', '\ShawnSandy\Extras\Apps\Maps\GMapsController');

Route::get('/img/{path}', '\ShawnSandy\Extras\Apps\Img\ImgsController@storage')->where('path', '.+');

Route::get('/public/img/{path}', '\ShawnSandy\Extras\Apps\Img\ImgsController@img')->where('path', '.+');

Route::get("/messages", '\ShawnSandy\Extras\Apps\ExtrasController@mail');

Route::post("/sendmail", '\ShawnSandy\Extras\Apps\Messaging\MessagesController');

Route::get("/github/auth", '\ShawnSandy\Extras\Apps\Socialize\SocialLoginController@index');

Route::get("/github/login", '\ShawnSandy\Extras\Apps\Socialize\SocialLoginController@auth');

Route::get('/linkedin/auth', '\ShawnSandy\Extras\Apps\Socialize\LinkedInLoginController@index');

Route::get('/linkedin/login', '\ShawnSandy\Extras\Apps\Socialize\LinkedInLoginController@auth');

Route::get('/facebook/auth', '\ShawnSandy\Extras\Apps\Socialize\FacebookLoginController@index');

Route::get('/facebook/login', '\ShawnSandy\Extras\Apps\Socialize\FacebookLoginController@auth');

Route::get('/twitter/auth', '\ShawnSandy\Extras\Apps\Socialize\Twitter\TwitterLoginController@index');

Route::get('/twitter/login', '\ShawnSandy\Extras\Apps\Socialize\Twitter\TwitterLoginController@auth');



