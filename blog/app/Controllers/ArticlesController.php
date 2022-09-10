<?php

namespace MyBlog\Controllers;

use PDO;
use MyBlog\Helpers\Database;
use MyBlog\Helpers\UtilHelper;

class ArticlesController
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    public function index()
    {
        // get all articles
        try {
            // layer-1
            // query data according to business logic

            $query = 'SELECT * FROM posts ORDER BY id DESC';
            $statement = $this->pdo->prepare($query);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Throwable $exception) {
            // write error to log
            die('Couldn\'t query to DB');
        }
    }

    public function create()
    {
        // show create page of article
    }

    public function store($request)
    {
        try {
            // store article data into database
            $title = $request['title'] ?? null;
            $description = $request['description'] ?? null;
            $category = $request['category'] ?? null;
            $authorName = $request['author_name'] ?? null;
            $image = $_FILES['image'] ?? null;
            $imagePath = '';

            // var_dump($image);
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
                if (!empty($image) && !empty($image['tmp_name'])) {
                    if (!is_dir(UtilHelper::storage_path('images'))) {
                        // var_dump(UtilHelper::root_storage_path('images'));
                        // exit;
                        mkdir(UtilHelper::storage_path('images'));
                        // mkdir('assets/images');
                    }

                    if (!is_dir(UtilHelper::storage_path('images/blogs'))) {
                        mkdir(UtilHelper::storage_path('images/blogs'));
                    }

                    // $imagePath = 'images/blogs/randomNumber_filename.jpg';
                    $imagePath = 'images/blogs/' . uniqid() . '_' . $image['name'];

                    move_uploaded_file($image['tmp_name'], UtilHelper::storage_path($imagePath));
                }

                $query = 'INSERT INTO posts (title,category,image_path,author_name,published_at)
            VALUES (:title,:category,:image_path,:author_name,:published_at)';
                $statement = $this->pdo->prepare($query);
                $statement->bindValue(':title', $title);
                $statement->bindValue(':category', $category);
                $statement->bindValue(':image_path', $imagePath);
                $statement->bindValue(':author_name', $authorName);
                $statement->bindValue(':published_at', date('Y-m-d H:i:s'));

                $statement->execute();

                header('Location: index.php');
                exit(0);
            }

            session_start();

            $_SESSION['errors'] = $errors;
            // var_dump($errors);exit;
            header('Location: create.php');
        } catch (\Throwable $exception) {
            var_dump($exception->getMessage());
            exit;
        }
    }

    public function edit($id)
    {
        // show edit page of article
    }

    public function update($id, $article)
    {
        // update article data in database
    }

    public function destroy($id)
    {
        // delete article from database
    }
}
