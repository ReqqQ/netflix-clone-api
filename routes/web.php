<?php

/** @var Router $router */

use Laravel\Lumen\Routing\Router;

$router->group(['namespace' => '\UI'], function($router)
{
    $router->get('/movies', 'MoviesController@getMovies');
});
