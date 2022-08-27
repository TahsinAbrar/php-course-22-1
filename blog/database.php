<?php

try {
    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $dbName = 'db_blog';
    
    /*
     * dsn = data source name
     * pdo = PHP Data Object
     * */
    $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
} catch (\Throwable $exception) {
    die('Couldn\'t connect to DB');
}
