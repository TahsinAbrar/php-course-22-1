<?php

// incremental / Decremental operator
$a = 10;

echo $a . "<br/>"; // 10

echo $a++ . "<br/>"; // 10

echo $a . "<br/>"; // 11

echo ++$a . "<br/>"; // 12 ??


echo "-- Now decrementing value-- <br/>";
echo $a--  . "<br/>";

echo $a . "<br/>";
echo --$a  . "<br/>";

echo (int) $a += 5; // $a = $a + 5
echo "<br/>";
echo (int) $a -= 2; // $a = $a - 2
echo "<br/>";


echo "check casting process <br/>";

// $value = 12.5;
$value = 12;

echo (int) $value;
echo "<br/>";
$value2 = '13';
echo (int) $value2;

echo "<br/>";
echo $value2 + 12;

echo "<br/>";
echo is_int($value2);
echo "<br/>";
echo is_int($value);


echo "match exp<br/>";
echo $value2 == '13';