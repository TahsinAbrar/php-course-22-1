<?php

namespace App\Helpers;

use PDO;
use PDOException;

class Database
{
    public static $config;
    protected static $instance;

    protected function __construct()
    {
        //
    }

    public static function loadConfig(array $config)
    {
        self::$config = $config;
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {

            if (empty(self::$config)) {
                throw new \Exception('DB Config is not loaded');
            }

            $host = self::$config['db_host'];
            $port = self::$config['db_port'];
            $user = self::$config['db_user'];
            $password = self::$config['db_password'];
            $dbName = self::$config['db_name'];

            try {
                $dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8mb4";
                self::$instance = new PDO($dsn, $user, $password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $error) {
                echo $error->getMessage();
                exit;
            }
        }

        return self::$instance;
    }
}
