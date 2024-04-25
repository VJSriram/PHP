<?php


 // PHP DataTypes
 /** 
  1. String
  2. Integer
  3. Float
  4. Boolean
  5. Object
  6. Array
  7. Null 
 */


 // String - sequence of characters
 $name = "Harry";
 $friend = "Rohan";

 echo "$name 's friend is $friend <br>";


 // Integers - non decimal number
 // Integer ranges between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems.
$income = 450000;
$debts =  100000;

echo "$income $debts  ";
echo "Total = <br>";

// Float - Decimal point number
$income = 344.5;
$debts =  -45.87;

echo "$income $debts  ";
echo "Total =";
echo "<br>";

// Boolean - can be either true or false
$x = true;
$is_friend = false;

echo $x;
echo "<br>";
echo $is_friend;
// var dump function
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);

// Object - Instances of classes
// Employee is a class ---> harry can be one object

//Employee emp = new Employee;

// Array - Used to store multiple values in a single variable
$friends = array("rohan", "shubham", "skillf", "larry");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];

// NULL
$name = NULL;
echo "<br>";
echo var_dump($name);
?>