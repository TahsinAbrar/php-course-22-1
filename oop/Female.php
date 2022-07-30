<?php

require_once 'Human.php';
// require 'Human.php';

class Female extends Human
{
    public function hello($name)
    {
        return "Hello Ms. " . $name;
    }
}
