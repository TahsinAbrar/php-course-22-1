<?php

// echo "hello PHP world";

$path = './';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));

echo "<h2>List of Files and Folder:</h2>";

echo "<hr/>";

foreach ($files as $file) {
    if (is_dir($file)) {
        echo "<hr/>";
        echo "<b><a href='$file'>$file</a></b>";
        echo "<hr/>";
    } else {
        echo "<a href='$file'>$file</a>";
    }

    echo "<br/>";
}
