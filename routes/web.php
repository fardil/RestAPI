<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key',function(){
    return str_random(32);
});

$router->post("/register", "AuthController@Register");
$router->post("/login","AuthController@Login");
$router->post("/register", "AuthController@register");
$router->post("/login", "AuthController@login");
$router->get("/user", "UserController@index");
$router->get('/quantitySize', 'quantitySizeController@index');
$router->get('/quantitySize/{id_baju}', 'quantitySizeController@show');
$router->post('/quantitySize', 'quantitySizeController@store');
