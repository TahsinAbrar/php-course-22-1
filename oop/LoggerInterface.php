<?php

interface LoggerInterface extends LoggerDriverInterface
{
    public const LOG_VERSION = '1.0';

    public function write();
}