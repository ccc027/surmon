<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');


Router::addGroup('',function ($router){

 //   $router->get('/','IndexController@home');
    $router->get('/show/{id}','IndexController@show');
    $router->get('/about','IndexController@about');


//    $router->get('/leavemes','HomeController@leaveMes');
//    $router->any('/leavemsg_store','HomeController@leavemsgStore');

//    $router->get('/contact','HomeController@contact');
//    $router->post('/contact_store','HomeController@contactStore');
//
//    $router->get('/type/{id}','HomeController@type');
//
//    $router->get('/tools','HomeController@tools');

});