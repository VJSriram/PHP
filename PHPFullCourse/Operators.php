<?php

// Arithmetic operators
// + - * / ** %

$x = 10;
$y = 2;
$z = null;

$z = $x + $y;
echo "Addition $z <br>";

$z = $x - $y;
echo "Substraction $z <br>";


$z = $x * $y;
echo "Multiplication $z <br>";

$z = $x / $y;
echo "Division $z <br>";

$z = $y % $x;
echo "Modulus $z <br>";

// Increment/Decrement operators

$counter = 10;
//Increment
$counter++;
echo "$counter <br>";


$counter = 10;
//Decrment
$counter--;
echo "$counter <br>";


// Operator Precedence
// ()
// **
// * / %
// + -

$total = 1 + 2 - 12 / 15625 % 222;
echo $total;

?>