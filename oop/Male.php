<?php

require_once 'Human.php';
// require 'Human.php';

class Male extends Human
{
    public function hello($name)
    {
        return "Hello Mr. " . $name;
    }

    // public function hello($firstName, $lastName)
    // {
    //     return "Hello Mr. " . $firstName . ' ' . $lastName;
    // }
}
