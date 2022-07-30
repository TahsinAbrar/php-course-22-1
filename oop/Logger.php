<?php

// Abstract class must have at least one abstract method
// We cannot create any object instance from an Abstract class

// Parent class
abstract class Logger
{
    public const LOG_VIEWER = 'enabled';
    public const LOG_MESSAGE = 'hello';

    abstract public function log($message);

    private function printLogMessage()
    {
        return self::LOG_MESSAGE;
    }

    protected function printDefaultLog($message)
    {
        return $this->printLogMessage() . ' ' . $message;
        // return $this->LOG_MESSAGE;
    }
}
