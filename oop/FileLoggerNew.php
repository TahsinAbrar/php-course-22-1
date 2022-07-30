<?php

require_once 'Logger.php';

class FileLoggerNew extends Logger
{
    public static $counter = 0;

    public function __construct()
    {
        // echo $this->counter; // 0
        // self::$counter++;
        $this->increaseCounter(); // ++  // previous value + 1
    }

    public function log($message)
    {
        // echo $this->counter; // 1
        return $this->printDefaultLog($message);
    }

    public function increaseCounter()
    {
        // echo $this->counter; // previous value + 1
        self::$counter++;
    }

    public function viewCounter()
    {
        return self::$counter;
    }

    public static function showCounter()
    {
        return self::$counter;
    }

    public static function writeToLog()
    {
        return self::printHello();
    }

    public static function printHello()
    {
        return 'hello';
    }
}