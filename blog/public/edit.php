<?php

// database connection
require_once __DIR__ . '/../config/database.php';

$action = 'edit';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {

    $id = $_GET['id'];
    $postQuery = 'SELECT * FROM posts WHERE id= :id';

    $stmt = $pdo->prepare($postQuery);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $postData = $stmt->fetch(PDO::FETCH_ASSOC);
}

// if POST data, then store the data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    die('Here, it will update data to database');

    $title = $_POST['title'] ?? null;
    $description = $_POST['description'] ?? null;
    $category = $_POST['category'] ?? null;
    $authorName = $_POST['author_name'] ?? null;
    $image = $_FILES['image'] ?? null;
    $imagePath = '';

    // var_dump($_FILES);
    // exit;

    // validation
    if (!$title) {
        $errors['title'] = 'Post title is required';
    }

    if (!$category) {
        $errors['category'] = 'Post category is required';
    }

    if (!$authorName) {
        $errors['author_name'] = 'Post author name is required';
    }

    if (empty($errors)) {
        if ($image) {
            if (!is_dir('images')) {
                mkdir('images');
            }

            if (!is_dir('images/blogs')) {
                mkdir('images/blogs');
            }

            // $imagePath = 'images/blogs/randomNumber_filename.jpg';
            $imagePath = 'images/blogs/' . uniqid(). '_' . $image['name'];

            move_uploaded_file($image['tmp_name'], $imagePath);
        }

    $query = 'INSERT INTO posts (title,category,image_path,author_name,published_at)
        VALUES (:title,:category,:image_path,:author_name,:published_at)';
        $statement = $pdo->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':category', $category);
        $statement->bindValue(':image_path', $imagePath);
        $statement->bindValue(':author_name', $authorName);
        $statement->bindValue(':published_at', date('Y-m-d H:i:s'));

        $statement->execute();

        header('Location: index.php');
    }
}

?>

<?php

ob_start();

include_once __DIR__ . '/../views/posts/edit.view.php';

$content = ob_get_clean();

$action = 'edit';
$pageTitle = 'Blog | Edit article';
$sectionTitle = 'Edit Article';

include_once __DIR__ . '/../views/layouts.view.php';
?>