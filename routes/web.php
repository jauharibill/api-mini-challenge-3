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

$router->post('/register', 'Auth\RegisterController@register');
$router->post('/login', 'Auth\LoginController@login');

$router->group(['prefix' => '/household'], function () use ($router) {
    $router->get('/list', 'HouseHoldController@getListHouseHold');
    $router->get('/list/{id}', 'HouseHoldController@getDetailHouseHold');
    $router->post('/save', 'HouseHoldController@storeProfileHouseHold');
});

$router->group(['prefix' => '/wastecollector'], function () use ($router) {
    $router->get('/list', 'WasteCollectorController@getListWasteCollector');
    $router->get('/list/{id}', 'WasteCollectorontroller@getDetailWasteCollector');
    $router->post('/save', 'WasteCollectorController@storeProfileWasteCollector');
});
