<?php

$counter = 1; // initiate for pass by value

$counter2 = 1; // initiate for pass by ref

echo 'initial value of counter: ' . $counter;
echo '<br/>';
echo 'initial value of counter2: ' . $counter2;
echo '<br/>';

// pass by value
function increaseValue($number)
{
    // create new variable and set to new memory location
    $number += 5;
    echo 'Pass by value: ' .$number;
    echo '<br/>';
}

// pass by reference
function increaseValueByRef(&$number)
{
    // use the existing memory location for that variable
    $number += 2;
    echo 'Pass by ref: ' .  $number; // 2
    echo '<br/>';
}

echo '<br/>';

increaseValue($counter); // pass by value
increaseValue($counter); // pass by value
increaseValue($counter); // pass by value
increaseValue($counter); // pass by value
increaseValue($counter); // pass by value

echo '<br/>';
echo '<br/>';
echo '<br/>';

increaseValueByRef($counter2);
increaseValueByRef($counter2);
increaseValueByRef($counter2);
increaseValueByRef($counter2);
increaseValueByRef($counter2);

echo '<br/>';
echo 'current value of counter variable: ' . $counter;
echo '<br/>';
echo 'current value of counter2 variable: ' . $counter2;

// echo '<br/>';
// debug_zval_dump($counter);
// echo '<br/>';
// debug_zval_dump($counter2);
