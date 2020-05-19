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

$router->post('/register', 'AuthController@Register');
$router->post('/login','AuthController@Login');
$router->get('/user', 'UserController@index');

$router->get('/vendors','VendorController@Index');
$router->get('/vendors/search/{nama_vendor}', 'VendorController@Search');
$router->get('/vendors{id_vendor}','VendorController@show');
$router->post('/vendors','VendorController@store');

$router->get('/transactions', 'TransactionController@index');
$router->get('/transactions/{id_transaction}', 'TransactionController@show');
$router->post('/transactions', 'TransactionController@store');

$router->get('/articles', 'articlesController@index');
$router->get('/articles/{id_artikel}', 'articlesController@show');
$router->post('/articles', 'articlesController@store');
$router->put('/articles/{id_artikel}', 'articlesController@update');
$router->delete('/articles/{id_artikel}', 'articlesController@destroy');

$router->get('/histories','HistoryController@index');
$router->get('/histories{id_history}','HistoryController@show');
$router->post('/histories','HistoryController@store');

$router->get('/bajus','BajuController@index');
$router->get('/bajus{id_baju}','BajuController@show');
$router->post('/bajus','BajuController@store');
