<?php

// arithmatic operations

// addition
// 1+1 =2


$value1 = 12;
$value2 = 15;

// echo "We will do arithmatic operations" . " in this file.<br/>" . PHP_EOL;
//echo "We will do arithmatic operations" . " in this file.<br/>" . PHP_EOL;

echo nl2br("We will do arithmatic operations" . " in this file." . PHP_EOL);


$addition = $value1 + $value2;

echo "======= Addition ===============<br/>";
echo "value 1: $value1 <br/>";
echo "value 2: $value2 <br/>";

echo "Addition of $value1 and $value2 is: $addition" . "<br/>";
echo "Addition of ${value1} and ${value2} is: ${addition}" . "<br/>";

echo 'Addition of ' .  $value1 . 's and '. $value2 .'s is: ' . $addition . "<br/>";

echo 'Addition of ${value1} and ${value2} is: ${addition}' . "<br/>";
//echo "Addition of value 1: $value1 and $value2 is: " . $addition;

// substraction
echo "======= substraction ===============<br/>";
$result = $value2 - $value1;

echo "Substraction of ${value1} and ${value2} is: ${result}" . "<br/>";

echo "Abs value of the substration result is: " . abs($result) . "<br/>";

// 10-2 =8

// multiplication

$multiplication_result = $value1 * $value2;

echo "Multiplication result of  ${value1} and ${value2} is: ${multiplication_result}" . "<br/>";
// 5*3 = 15

// division

// 50 / 10 = 5
echo "======= division ===============<br/>";

$div_val_1 = 50;
$div_val_2 = 10;

$div_result = $div_val_1 / $div_val_2;

echo "Division result of  ${div_val_1} and ${div_val_2} is: ${div_result}" . "<br/>";

// modulus

echo "======= Modulus (Remainder) ===============<br/>";

$div_val_1 = 58;
$div_val_2 = 9;

$div_result = $div_val_1 % $div_val_2;

echo "Modulus result of  ${div_val_1} and ${div_val_2} is: ${div_result}" . "<br/>";

// 50 % 10 = 0
// 50 % 8 = 2


echo "<br/>=================================<br/>";

$musaBinShamserErTotalTaka = 124056278600.9815; 
// echo "Musa Bin Shamser has total: " . $musaBinShamserErTotalTaka . ' BDT'; 
echo "Musa Bin Shamser has total: " . number_format($musaBinShamserErTotalTaka, 2)  . ' BDT';


echo "<br/>=================================<br/>";


// strlen('The quick brown fox jumps over the lazy dog')
// strpos('quick')
// trim(' quick ');
// ltrim(' quick ');
// rtrim(' quick ');

// ucfirst('abrar'); // Abrar

$type = 'Car';
// strtoupper($type); // CAR
// strtolower($type); // car


// str_replace()

//echo 



// abs()
// ceil('3.4') // 
// floor()
// round()
// 