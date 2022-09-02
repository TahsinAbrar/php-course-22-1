<?php

trait LogType

{
    public string $type;

    public function setLogType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }

    public function getLogType() : string
    {
        return $this->type;
    }

}