<?php

// while
// .. do while
// for loop


// $url = 'http://localhost/learn-php/basic/conditionals_loop.php';
// GET URL ?color=white


// switch


// code block -1
$favcolor = $_GET['color'] ?? "red";

// code block -2
// if (isset($_GET['color'])) {
//     $favcolor = $_GET['color'];
// } else {
//     $favcolor = "red";
// }

$valueForPrint = '';


switch ($favcolor) {
  case "red":
    $valueForPrint = "Your favorite color is red!";
    break;
  case "blue":
    $valueForPrint = "Your favorite color is blue!";
    break;
  case "green":
    $valueForPrint = "Your favorite color is green!";
    break;
  default:
    $valueForPrint = "Your favorite color is neither red, blue, nor green!";
}

// echo $valueForPrint;


// block
for ($i = 0; $i < 10; $i++) {
    if ($i == 6) {
        continue; // skip
    }

    if ($i == 8) {
        break; // halt
    }

    // code execution
    echo "Value is: " . $i . "<br/>";
}


// further code execution ....
$fruitList = [
    "banana", // $fruit -- 1
    "apple", // $fruit -- 2
    "dragon fruit", // $fruit --3
    "orange", // $fruit  -- 4
    "mango", // $fruit -- 5
    "jackfruit" // $fruit -- 6
];

// foreach ($fruitList as $fruit) {
foreach ($fruitList as $key => $fruit) {
    // echo $fruit . "<br/>";
    echo $key . " : " . $fruit . "<br/>";
}

print("<hr/>");
echo "Another code block";

print("<hr/>");

// $hello = 'this is string'; // string

// $hello = 1; // int

$data = [
    // 'key' => 'value',
    'name' => 'John Doe',
    'age' => 20,
    'email' => 'john.doe@email.com'
];

// echo "<pre>";
// var_dump($data);
// echo "</pre>";

echo "<b>Value will be printed <br/></b>";
foreach($data as $key => $value) {
// foreach($data as $value) {
    // echo  $key . " : " . $value . "<br/."; // there will be no exception to be thrown 
    echo  $key . " : " . $value . "<br/>";
    // echo  $value . "<br/>";
}

echo "<br/>";
echo "<hr/>";

$persons = [
    // start of person 1
    0 => [ // layer -1
        // 'name' => [
        //     'firstname' => 'John',
        //     'lastname' => 'Doe',
        // ],
        'name' => 'John Doe',
        'age' => 20,
        'email' => 'john.doe@email.com'
    ],  // end of person 1

    // start of person 2
    1 => [ // layer -1
        'name' => 'Lilly',
        'age' => 19,
        'email' => 'lilly@email.com'
    ],  // end of person 2

    // start of person 3
    2 => [ // layer -1
        'name' => 'Hasan Ahmed',
        'age' => 19,
        'email' => 'lilly@email.com',
        // 'address' => [
        //     'country' => 'BD',
        //     'district' => 'Barishal'
        // ]
    ]  // end of person 3
];

foreach ($persons as $key => $person) {

    echo "Showing value of Person: " . $key . "<br/>";

    foreach ($person as $index => $value) {

        // business logic....

        if (is_array($value)) {
            echo ucfirst($index) .  ' : ' . implode(' ', $value) . "<br/>";
        } else {
            echo ucfirst($index) .  ' : ' . $value . "<br/>";
        }
    }

    echo "<hr/>";

}
