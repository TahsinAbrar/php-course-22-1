<?php

require_once "Logger.php";
require_once "LogType.php";

class FileLogger extends Logger
{
    use LogType;

    protected function writeToLog(string $message)
    {
        $filePath = 'app.log';
        $handle = fopen($filePath, 'a+');
        $logMessage = strtoupper($this->getLogType()) . ': ' . $message;
        fwrite($handle, "\n- $logMessage");

        try {
            fclose($handle);
        } catch (\Throwable $e) {
            // need to ensure proper logging
            var_dump($e->getMessage() . $e->getLine());
        }
    }

    public function log()
    {
        return $this->writeToLog('Hello');
    }
}
