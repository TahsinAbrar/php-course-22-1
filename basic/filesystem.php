<?php

// Magic constants
// echo 'Directory: ' .  __DIR__ . '<br/>';
// echo 'File Name: ' . __FILE__ . '<br/>';
// echo 'Line Number: ' . __LINE__ . '<br/>';

// Error tracing

$folder = 'test_folder';

// create directory
// mkdir($folder);
// echo 'new folder created' . '<br/>';

// if (is_dir($folder)) {
//     // rename directory
//     rename($folder, 'my_folder');
//     echo 'folder renamed' . '<br/>';

//     // delete directory
//     rmdir('my_folder');
//     echo 'folder deleted' . '<br/>';
// } else {
//     echo 'Folder does not exist!' . '<br/>'; 
// }


// read file
$filePath = 'quotes/quotes.md';
// $file = readfile($filePath);
// $file = file_get_contents($filePath);
// echo $file;

// check file exists


// filesize
// echo "<br/>";
// echo filesize($filePath);
// // absolute path

// if (!is_dir('files')) {
//     mkdir('files');
// }

// copy file
// copy($filePath, 'files/new-file.txt');
// move file
// rename file


// CRUD : Create, Read, Update, Delete


// file streaming

// open file
// $handle = fopen($filePath, 'r');

// read the file
// echo fread($handle, filesize($filePath));
// echo fread($handle, 20);
// echo fread($handle, 20);
// echo fread($handle, 20);
// echo fread($handle, 20);

// read a single line
// echo fgets($handle);
// echo fgets($handle);
// echo fgets($handle);
// echo fgets($handle);
// echo fgets($handle);
// echo fgets($handle);
// echo fgets($handle);
// echo fgets($handle);
// echo fgets($handle);

// read a single character
// echo fgetc($handle);

// write to a file
// $handle = fopen($filePath, 'r+');
// append
$handle = fopen($filePath, 'a+');
fwrite($handle, "\n- Failure is the pillar of success.");


try {
    fclose($handle);
} catch (\Throwable $e) {
    // need to ensure proper logging
    var_dump($e->getMessage() . $e->getLine());
}

// unlink('files/new-file.txt');

$stamp = 1658272927; // epoch time
$date = date("d F Y H:i:s", $stamp);

echo $date;