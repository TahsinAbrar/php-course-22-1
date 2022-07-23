<?php

// global scope

function sayHello()
{
    // local scope
    global $person;

    $person = 'Unknown Person';
    echo $person;
    // echo $GLOBALS['person'];
}


// outer space
$person = 'John Doe';
echo sayHello();
echo "<br/>";
echo "<hr/>";

// $person = 'John Doe';
// $person = 'John Shipon';
echo $person;
// echo sayHello();

echo "<br/>";
echo "<hr/>";

// $person2 = 'test person';

// echo $person2;



// scope
// include vs require
// pass-by-value & pass-by-reference