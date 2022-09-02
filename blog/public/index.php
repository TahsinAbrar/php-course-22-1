<?php

// require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/Helpers/Database.php';
require_once __DIR__ . '/../app/Controllers/ArticlesController.php';

use App\Controllers\ArticlesController;
use App\Helpers\Database;

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