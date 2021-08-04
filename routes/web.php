<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', 'DefaultController@index');

$router->get('/api/v1/descriptions', function () use ($router) {
    $results = app('db')->select("SELECT * FROM texto_imprimir LIMIT 0, 10");
    return $results;
});
