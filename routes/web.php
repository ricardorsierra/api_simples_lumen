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

$router->post('categoria', ['uses' => 'CategoryController@create']);
$router->get('categoria',  ['uses' => 'CategoryController@index']);

$router->post('cursos', ['uses' => 'CourseController@create']);
$router->get('cursos',  ['uses' => 'CourseController@index']);
$router->get('cursos/{id}', ['uses' => 'CourseController@show']);
