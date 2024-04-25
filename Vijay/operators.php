<?php

// Operators in PHP
/*
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators 
*/

$a = 45;
$b = 8;

// Arithemtic Operator
echo "When a + b, the result is " . ($a + $b) . "<br>";
echo $a + $b . "<br>";
echo "When a - b, the result is " . ($a - $b) . "<br>";
echo "When a * b, the result is " . ($a * $b) . "<br>";
echo "When a / b, the result is " . ($a / $b) . "<br>";
echo "When a ** b, the result is " . ($a ** $b) . "<br>";

// Modular operator
echo "When a % b, the result is " . ($a % $b) . "<br>";

// Assignment Operators
$x = $a;
echo "For x, the value is " . $x . "<br>";

$a += 6;
echo "For a, the value is " . $a . "<br>";

$a -= 6;
echo "For a, the value is " . $a . "<br>";

$a *= 6;
echo "For a, the value is " . $a . "<br>";

$a /= 5;
echo "For a, the value is " . $a . "<br>";

$a %= 5;
echo "For a, the value is " . $a . "<br>";


// 3. Comparison Operators

$x = 7;
$y = 9;

echo "For x == y, the result is ";
echo var_dump($x == $y); 
echo var_dump($x < $y); 
echo var_dump($x > $y) . "<br>"; 


echo "For x <> y, the result is not eqaulto ";
echo var_dump($x <> $y); 
echo "<br>";

// 4. Logical Operators 

$m = true;
$n = false;
echo "For m && n, the result is ";
echo var_dump($m && $n); 
echo "<br>";

echo "For m || n, the result is ";
echo var_dump($m || $n); 
echo "<br>";

// ! operator will switch true to false && false to true
echo "For !m, the result is ";
echo var_dump(!$m); 
echo "<br>";

echo "For !n, the result is ";
echo var_dump(!$n); 
echo "<br>";

?>