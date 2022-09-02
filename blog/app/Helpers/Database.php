<?php

namespace App\Helpers;

use PDO;

class Database
{
    protected static $instance;
    protected static $config;

    protected function __construct()
    {
        //
    }

    // public static function loadConfig(array $config)
    // {
    //     self::$config = $config;
    // }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            // if (empty(self::$config)) {
            //     throw new \Exception('config is not loaded');
            // }

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
                // $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
                self::$instance = new PDO($dsn, $user, $password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            } catch (\Throwable $exception) {
                die('Couldn\'t connect to DB');
            }
        }

        return self::$instance;
    }
}
