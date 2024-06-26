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

$router->get('/get-book', 'AllBooksApiController@search');
$router->get('/search', 'BookFinderController@searchBooks');
$router->get('/manga-reco', 'MyAnimeListController@getMangaRecommendations');
$router->get('/details/{id}', 'MyAnimeListController@getMangaDetails');

$router->get('/users1', 'UserController@index');
$router->post('/users1', 'UserController@add');
$router->get('/users1/{id}', 'UserController@show');
$router->put('/users1/{id}', 'UserController@update');
$router->delete('/users1/{id}', 'UserController@delete');

$router->get('/logs1', 'AuthenticationLogController@index');
$router->get('/logs1/{id}', 'AuthenticationLogController@show');
$router->delete('/logs1/{id}', 'AuthenticationLogController@delete');