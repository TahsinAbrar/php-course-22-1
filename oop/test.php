<?php

require_once 'FileLogger.php';



/* ========== PROCESS 1 =========== */
// create a new instance of FileLogger

echo "========== Starting Logger 1 ============";
echo "<br/>";

$logger = new FileLogger(); // logger 1: case 1 // construct method called
echo $logger->log('logger 1');

echo "<br/>";
echo $logger->viewCounter();
// echo $logger::LOG_VIEWER;
// echo FileLogger::LOG_VIEWER;
echo "<br/>";

echo "<br/>Logger 1 counter: <br/>";
$logger->increaseCounter();  // logger 1: case 2 // 1+1 =2
$logger->increaseCounter();  // logger 1: case 2 // 2+1 = 3
echo $logger->viewCounter(); // 3
echo "<br/>";
echo "========== End of Logger 1 ============";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
/* ========== PROCESS 1 =========== */


/* ========== PROCESS 2 =========== */


/* ========== PROCESS 2 =========== */

echo "========== Starting Logger 2 ==============";
echo "<br/>";

// create another new instance of FileLogger
// __construct() method called when an object created
$logger2 = new FileLogger();  // logger 2: case 1 // within constructor, counter++

echo $logger2->log('logger 2');

echo "<br/>";
echo $logger2->viewCounter();

echo "<br/>Logger 2 counter: <br/>";
$logger2->increaseCounter();  // logger 2: case 2
$logger2->increaseCounter();  // logger 2: case 2
$logger2->increaseCounter();  // logger 2: case 2
// $logger2->increaseCounter();  // logger 2: case 2
echo $logger2->viewCounter(); // 5

echo "<br/>";
echo " =========== End of Logger 2 ============";
/* ========== PROCESS 2 =========== */
