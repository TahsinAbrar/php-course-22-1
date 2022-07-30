<?php

// require_once 'Human.php';
require_once 'Male.php';
require_once 'Female.php';
// require_once 'Male.php';

$john = new Male();
echo $john->hello('John Doe');

echo "<br/>";
echo "<br/>";
$jane = new Female();
echo $jane->hello('Jane Doe');
echo "<br/>";

// $human = new Human();
// echo $human->hello('Hello New Human');

