<?php

session_start();

/*
 * Req 1: If there is any validation error, show the validation error in the next page.
 * Req 2: If the create.php page load again without having any error, do not show the same errors.
 * Req 3: If all OK, then store the data into DB.
*/



require_once __DIR__ . '/../vendor/autoload.php';
// database connection
require_once __DIR__ . './../config/database.php';

use MyBlog\Controllers\ArticlesController;

// require_once __DIR__ . './../app/Controllers/ArticlesController.php';

$action = 'create';
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];

// var_dump($_SESSION);
// var_dump($_SESSION);
unset($_SESSION['errors']);
session_destroy();


// if POST data, then store the data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $instance = new ArticlesController();
    $instance->store($_POST);
    exit;
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    die('Here, it will store data to database');
}

?>


<!-- GET request page -->
<?php

ob_start(); // built-in function

include_once __DIR__ . '/../views/posts/create.view.php';

$content = ob_get_clean();

$action = 'create';
$pageTitle = 'Blog | Create new Article';
$sectionTitle = 'Create New Article';

include_once __DIR__ . '/../views/layouts.view.php';