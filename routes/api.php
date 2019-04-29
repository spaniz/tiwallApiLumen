<?php
/**
 * Created by PhpStorm.
 * User: 110
 * Date: 25/04/2019
 * Time: 12:32 PM
 */

$router->group(['prefix' => 'v1' , 'namespace'=>'v1'] , function () use($router) {
    $router->get('channel', 'ChannelController@list');
    $router->get('channel/{id}', 'ChannelController@get');
    $router->get('page', 'PageController@list');
});