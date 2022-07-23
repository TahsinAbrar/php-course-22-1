<?php

// echo "Here result will be published";

// echo "value 1 is: " . $_GET['value1'] ?? '';
// echo "<br/>";
// echo "value 2 is: " . $_GET['value2'] ?? '';
// var_dump("Mu..Ha..Ha"); die();

// code-1
if (isset($_POST['number_one'])) {
  echo $_POST['number_one'];
} else {
  echo "nai nai";
}


// if (true) {
//   if ($condition == 1) {
//     if ($condition2 == 0) {
//       //
//     }
//   }
// }



// code-2
echo isset($_POST['number_one']) ? $_POST['number_one'] : 'nai nai'; // ternary operator

// code-3
echo "The real value of Number 1: " . $_POST['number_one'] ?? 'nai nai'; // null coalescing operator
echo "<br/>";
echo "The real value of Number 2: " . $_POST['number_two'] ?? 'kicchu nai';

// HTTP Method / Verb
