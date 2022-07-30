<?php

require_once 'FileLoggerNew.php';



/* ========== PROCESS 1 =========== */
// create a new instance of FileLogger

// echo "========== Starting Logger 1 ============";
// echo "<br/>";

// $logger = new FileLoggerNew(); // logger 1: case 1 // construct method called
// // counter: 1

// echo $logger->log('logger 1');

// echo "<br/>";
// echo $logger->viewCounter();
// // counter: 1

// // echo $logger::LOG_VIEWER;
// // echo FileLogger::LOG_VIEWER;
// echo "<br/>";

// echo "<br/>Logger 1 counter: <br/>";
// // counter: +1 = 2
// $logger->increaseCounter();  // logger 1: case 2 // 1+1 =2

// // counter: +1 = 3
// $logger->increaseCounter();  // logger 1: case 2 // 2+1 = 3
// echo $logger->viewCounter(); // 3

// echo "<br/>";
// echo "========== End of Logger 1 ============";
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";
// /* ========== PROCESS 1 =========== */


// /* ========== PROCESS 2 =========== */


// /* ========== PROCESS 2 =========== */

// echo "========== Starting Logger 2 ==============";
// echo "<br/>";

// // create another new instance of FileLogger
// // __construct() method called when an object created
// $logger2 = new FileLoggerNew();  // logger 2: case 1 // within constructor, counter++
// // counter: +1 = 4

// echo $logger2->log('logger 2');

// echo "<br/>";
// echo $logger2->viewCounter();

// echo "<br/>Logger 2 counter: <br/>";
// // $logger2->increaseCounter();  // logger 2: case 2
// // $logger2->increaseCounter();  // logger 2: case 2
// // $logger2->increaseCounter();  // logger 2: case 2
// // $logger2->increaseCounter();  // logger 2: case 2
// echo $logger2->viewCounter(); // 5

// echo "<br/>";
// echo " =========== End of Logger 2 ============";
// /* ========== PROCESS 2 =========== */

// echo "<br/>";
// $logger3 = new FileLoggerNew();  // logger 2: case 1 // within constructor, counter++
//  // counter + 1 = 5

//  echo $logger3->log('logger 3');

// echo "<br/>";
// echo $logger3->viewCounter();

// echo "<br/>Logger 3 counter: <br/>";


// echo "<br/>";
// echo FileLoggerNew::showCounter();
// echo "<br/>";

// $logger = new FileLoggerNew();
// echo FileLoggerNew::showCounter();
// echo "<br/>";
// $logger2 = new FileLoggerNew();
// echo FileLoggerNew::showCounter();
// echo "<br/>";
// $logger3 = new FileLoggerNew();
// echo FileLoggerNew::showCounter();
// echo "<br/>";

echo FileLoggerNew::writeToLog();