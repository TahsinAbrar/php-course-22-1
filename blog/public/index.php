<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Router;
use Illuminate\Routing\UrlGenerator;
// use MyBlog\Controllers\ArticlesController;
use MyBlog\Helpers\Database;

// load dotenv configuration
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// load database config
$dbConfig = include_once __DIR__ . '/../config/database.php';
Database::loadConfig($dbConfig);

// get database instance
$pdo = Database::getInstance();

// $pageTitle = 'Blog Site';
// $heading = 'All Posts';


// $articlesInstance = new ArticlesController();
// $articles = $articlesInstance->index();


// ob_start();

// include_once __DIR__ . '/../views/posts/index.view.php';

// $content = ob_get_clean();

// $action = 'index';
// $pageTitle = 'Blog | All Articles';
// $sectionTitle = 'All Articles';

// include_once __DIR__ . '/../views/layouts.view.php';


// Create a service container
$container = new Container;

// Create a request from server variables, and bind it to the container; optional
$request = Request::capture();
$container->instance('Illuminate\Http\Request', $request);

// Using Illuminate/Events/Dispatcher here (not required); any implementation of
// Illuminate/Contracts/Event/Dispatcher is acceptable
$events = new Dispatcher($container);

// Create the router instance
$router = new Router($events, $container);

// Load the routes
require_once __DIR__ . '/../routes/web.php';

// Create the redirect instance
$redirect = new Redirector(new UrlGenerator($router->getRoutes(), $request));

// use redirect
// return $redirect->home();
// return $redirect->back();
// return $redirect->to('/');

// Dispatch the request through the router
$response = $router->dispatch($request);

// var_dump($response);exit;
// Send the response back to the browser

$response->send();

// Route::get('/posts'. [ArticlesController::class, 'index']);