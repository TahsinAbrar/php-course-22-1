<?php


use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Router;

/** @var $router Router */
$router->get('/', function () {
    return 'hello new world!';
});

// $router->METHOD(PATH, ACTION)

// ACTION : Closure
// []

// HTTP Verb


$router->get('/', function () {
    return 'hello new world!';
});

$router->get('/contact', function () {
    return 'hello contact us page!';
});

// $router->get('articles', [
//     // 'name' => 'posts.index',
//     'uses' => '\MyBlog\Controllers\ArticlesController@index'
// ]);


$router->group(['namespace' => 'MyBlog\Controllers', 'prefix' => 'posts'], function (Router $router) {
    $router->get('/', [
        // 'name' => 'posts.index',
        'uses' => 'ArticlesController@index'
    ]);
    $router->get('/create', ['name' => 'posts.create', 'uses' => 'ArticlesController@create']);
    $router->post('/', ['name' => 'posts.store', 'uses' => 'ArticlesController@store']);
});