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
$router->get("/user", "UserController@index");
$router->get("/vendor/search", "VendorController@Index");
$router->get("/vendor/search/{nama_vendor}", "VendorController@Search");
$router->get('/quantitySize', 'quantitySizeController@index');
$router->get('/quantitySize/{id_baju}', 'quantitySizeController@show');
$router->post('/quantitySize', 'quantitySizeController@store');
$router->get('/articles', 'articlesController@index');
$router->get('/articles/{id_artikel}', 'articlesController@show');
$router->post('/articles', 'articlesController@store');
$router->put('/articles/{id_artikel}', 'articlesController@update');
$router->delete('/articles/{id_artikel}', 'articlesController@destroy');
