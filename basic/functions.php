<?php

declare(strict_types=1); // strictly typed

// what is function? why do we need function?

// preventing re-invent the wheel

// built-in functions

// user-defined functions


// what is the difference between method and function?


// $user = new User(); // object of User class

// $user->getUser();

// class User
// {
//     // this is called method
//     // private function getUser()
//     public function getUser()
//     {
//         //
//     }
// }


// regular function
// function showWelcomeUser()
// definition part
function show_welcome_user($userName) // parameter
{
    return "Hello " . $userName . "<br/>";
}

// calling part
$user = $_GET['username'] ?? 'No one'; // single time use

// echo show_welcome_user($user); // as a parameter, it called arguments


// only for better performance
// echo show_welcome_user($_GET['username'] ?? 'No one'); // as a parameter, it called arguments

// echo sum(2, 3);
// echo "<br/>";
// echo sum(2, 6);
// echo "<br/>";
// echo sum(12, 16);
// echo "<br/>";
// echo sum('a', 16);
// echo sum(16, '15');
// echo sum(16, '15');
// echo sum(16, 'a');
// echo sum(16, 15);
// echo sum(16, 15, 14);

// echo sum(16, 15, 14, 19);

echo "<br/>hi<br/>";

// function sum($a, $b)
// function sum($a, $b)
// function sum(int $a, int $b)
function sum(float $a, float $b): float
{
    // var_dump($b);
    $result = $a + $b; // do the addition
    // $result = $a + (int) $b; // do the addition

    // return 'result is: ' . $result . "<br/>"; // string
    return $result;
}


$totalResult = 1.2;

// for ($i = 0; $i < 10; $i++) {
//     // $totalResult += sum($i, $i+2);
//     $totalResult = $totalResult + sum($i, $i+2); // here, sum() function is called
// }

// ------------------- //
// var_dump($totalResult);
// var_dump("Total result: " . $totalResult);

// echo "Total result: " . $totalResult;


// params1
// params2

// function summation($a, $b, int ...$numbers)
function summation(...$numbers)
{
    // $sum = $a + $b;
    $sum = 0;
    // $string = '';

    foreach ($numbers as $number) {
        $sum += $number;
        // $string .= $number;
    }

    return $sum;
    // return $string . "<br/>";
    // var_dump($numbers);
}

// echo summation(16, 15, 14, 18);
// echo summation(16, 15, 's');
// echo summation('abcd');
// echo summation('abcd');
// echo summation('abcd');
// echo summation('abcd');
// echo summation('abcd');

// arrow function
// anonymous function

$numbersList = [12, 18, 5, 11, 10, 95, 3];

// $factors = [2, 3, 5];

$factor = 5;

// foreach ($factors as $factor) {
// $multiples = array_filter($numbersList, function ($number) use ($factor) {
//     return $number % $factor == 0;
// });

$multiples = array_filter($numbersList, fn ($number) => $number % $factor == 0);

$multiples = array_filter($numbersList, 'checkFactor');

function checkFactor($number)
{
    return $number % 5 == 0;
}

echo "Multiples of $factor\n";
echo "<pre>";
// var_dump($multiples);
print_r($multiples);
echo "</pre>";
// }

function checkFunctionIsCallable()
{
    //
}
