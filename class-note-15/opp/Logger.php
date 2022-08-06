<?php

class Logger
{
    protected function writeToLog(string $message)
    {
        return 'write to log';
    }

    private function printToLog()
    {
        return 'print to log';
    }

    public function messageToLog()
    {
        return $this->printToLog();
    }
}
