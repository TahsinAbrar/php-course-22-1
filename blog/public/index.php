<?php

require_once __DIR__ . '/../vendor/autoload.php';
// require_once __DIR__ . '/../config/database.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();


use MyBlog\Controllers\ArticlesController;
use MyBlog\Helpers\Database;

$dbConfig = include_once __DIR__ . '/../config/database.php';
Database::loadConfig($dbConfig);

$pdo = Database::getInstance();

$pageTitle = 'Blog Site';
$heading = 'All Posts';


$articlesInstance = new ArticlesController();
$articles = $articlesInstance->index();


ob_start();

include_once __DIR__ . '/../views/posts/index.view.php';

$content = ob_get_clean();

$action = 'index';
$pageTitle = 'Blog | All Articles';
$sectionTitle = 'All Articles';

include_once __DIR__ . '/../views/layouts.view.php';
?>