<?php

require_once 'Logger.php';

class ConsoleLogger extends Logger
{
    public function log($message)
    {
        return self::printDefaultLog($message);
        // return $this->printDefaultLog();
    }
}