<?php

require_once 'Logger.php';
require_once 'LoggerInterface.php';

class DatabaseLogger extends Logger implements LoggerInterface
{
    public $counter = 0;

    public function __construct()
    {
        $this->increaseCounter(); // ++
    }

    public function driver()
    {
        return 'database';
    }

    public function write()
    {
        // implementation logic here...
    }

    public function log($message)
    {
        // echo $this->counter; // 1
        return $this->printDefaultLog($message);
    }

    public function increaseCounter()
    {
        // echo $this->counter; // previous value + 1
        $this->counter++;
    }

    public function viewCounter()
    {
        return $this->counter;
    }
}