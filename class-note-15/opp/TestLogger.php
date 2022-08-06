<?php

require_once "FileLogger.php";

class TestLogger
{
    public function test() 
    {
        $logger = new FileLogger();
        // $logger->setLogType('info');
        // $logger->log();
        $logger->setLogType('error')->log();
        return $logger->getLogType();
        // return $logger->log();

        // return (new FileLogger())->log();
    }
}
