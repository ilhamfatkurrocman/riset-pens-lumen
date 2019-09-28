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
// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', 'HomeController@getAll');
$router->get('/customer', 'CustomerController@index');
$router->get('/customer/{nama}', 'CustomerController@show');
$router->post('/customer', 'CustomerController@store');
$router->put('/customer/{id}','CustomerController@update');
$router->get('/dashboard','DashboardController@index');
