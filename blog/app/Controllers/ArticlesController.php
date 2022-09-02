<?php

namespace App\Controllers;

use PDO;
use App\Helpers\Database;

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
        // store article data into database
        $title = $request['title'] ?? null;
        $description = $request['description'] ?? null;
        $category = $request['category'] ?? null;
        $authorName = $request['author_name'] ?? null;
        $image = $_FILES['image'] ?? null;
        $imagePath = '';

        // var_dump($request);
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
                $imagePath = 'images/blogs/' . uniqid() . '_' . $image['name'];

                move_uploaded_file($image['tmp_name'], $imagePath);
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
        }

        header('Location: create.php');
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
