<?php

// if..else

// age = 21 && gender = male
// age = 18 && gender = female

$age = $_GET['age'] ?? 0;
$gender = $_GET['gender'] ?? '';

// if (($age >= 21 && $gender == 'male') || ($age >= 18 && $gender == 'female')) {
//     echo "You are eligible for marriage according to bd law";
// } else {
//     echo "You are not eligible for marriage according to bd law";
// }

// if ($age >= 21 && $gender == 'male') {
//     echo "You are <b>eligible</b> for marriage according to bd law";
// } elseif ($age >= 18 && $gender == 'female') {
//     echo "You are <b>eligible</b> for marriage according to bd law";
// } else {
//     echo "You are <b>not eligible</b> for marriage according to bd law";
// }

// $eligibleCarList = ['toyota', 'marcedez'];


// $carList = 'toyota,alien'; // rakib bhai have 2 cars
$carList = $_GET['carlist'] ?? ''; // rakib bhai have 2 cars

$carListArray = array_filter(explode(",", $carList));

echo "<pre>";
var_dump($carListArray);
// var_dump(empty($carListArray));
var_dump(!empty($carListArray) && count($carListArray) == 1);
echo "</pre>";

if (!empty($carListArray) && count($carListArray) == 1) {
    echo "You are <b>Eligible</b> for insurance.";
} else {
    echo "You are <b>Not Eligible </b> for insurance.";
}
