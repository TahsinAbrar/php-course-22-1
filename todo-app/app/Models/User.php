<?php

namespace App\Models;

use App\Helpers\Database;

class User
{
    public $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance();
    }

    public function getUserByEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // $query = $conn->prepare("SELECT * FROM users WHERE (username=:username OR email=:email) AND password=:password");
        $queryURI = "SELECT count(*) AS isUserAvailable FROM users WHERE email=:email";
        $query = $this->connection->prepare($queryURI);
        $query->bindValue(":email", $email);
        // $query->bindValue(":password", $password);
        $query->execute();
        return $query->fetch($this->connection::FETCH_ASSOC);
        // collect a user with an email
    }

    public function auth($email, $password)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // $query = $conn->prepare("SELECT * FROM users WHERE (username=:username OR email=:email) AND password=:password");
        $queryURI = "SELECT name,email,password,role,is_active FROM users WHERE email=:email";
        $query = $this->connection->prepare($queryURI);
        $query->bindValue(":email", $email);
        // $query->bindValue(":password", password_hash($password, PASSWORD_BCRYPT));
        $query->execute();
        $user = $query->fetch($this->connection::FETCH_ASSOC);

        if(password_verify($password, $user['password'])) {
            // var_dump('user pass matched');exit;
            unset($user['password']);
            return $user;
        }

        throw new \Exception('User email or password incorrect');

    }
    public function save(array $user)
    {
        // var_dump('eikhane asche to??');
        // var_dump($user);
        // exit;
        $name = htmlspecialchars($user['name']);
        $email = filter_var($user['email'], FILTER_VALIDATE_EMAIL);
        $password = password_hash($user['password'], PASSWORD_BCRYPT);


        // var_dump($name, $email, $password);exit;
        // do store the user data into database
        $queryURI = "INSERT INTO users (name, email, password, role, is_active) VALUES (:username, :email, :password, :role, :is_active)";
        $query = $this->connection->prepare($queryURI);
        $query->bindValue(":username", $name);
        $query->bindValue(":email", $email);
        $query->bindValue(":password", $password);
        $query->bindValue(":role", 'user');
        $query->bindValue(":is_active", true);

        return $query->execute();
    }
}
