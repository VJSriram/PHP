<?php

/*
    In PHP, typecasting is the process of converting a value from one data type to another. 
    This can be particularly useful when you need to perform operations or comparisons between variables of different types. 
    Here are some examples of typecasting in PHP:

1. **Explicit Typecasting**:
   - **Example**: Converting a string to an integer.
     ```php
     $str = "123";
     $num = (int) $str;
     echo $num; // Output: 123 (integer)
     ```

2. **Implicit Typecasting**:
   - **Example**: Performing arithmetic operation with different types.
     ```php
     $str = "10";
     $num = $str + 5; // PHP implicitly converts $str to an integer
     echo $num; // Output: 15
     ```

3. **Casting to String**:
   - **Example**: Converting an integer to a string.
     ```php
     $num = 123;
     $str = (string) $num;
     echo $str; // Output: "123" (string)
     ```

4. **Casting to Integer**:
   - **Example**: Converting a floating-point number to an integer.
     ```php
     $float = 10.5;
     $int = (int) $float;
     echo $int; // Output: 10 (integer)
     ```

5. **Casting to Float**:
   - **Example**: Converting a string containing a floating-point number to a float.
     ```php
     $str = "3.14";
     $float = (float) $str;
     echo $float; // Output: 3.14 (float)
     ```

6. **Boolean Casting**:
   - **Example**: Converting a non-empty string to boolean.
     ```php
     $str = "Hello";
     $bool = (bool) $str;
     var_dump($bool); // Output: bool(true)
     ```

7. **Array Casting**:
   - **Example**: Converting a scalar value to an array.
     ```php
     $value = 123;
     $array = (array) $value;
     print_r($array); // Output: Array([0] => 123)
     ```

8. **Object Casting**:
   - **Example**: Converting an array to an object.
     ```php
     $array = ['name' => 'John', 'age' => 30];
     $object = (object) $array;
     var_dump($object); // Output: object(stdClass)#1 (2) { ["name"]=> string(4) "John" ["age"]=> int(30) }
     ```

9. **Null Casting**:
   - **Example**: Converting a value to null.
     ```php
     $value = "Hello";
     $null = (unset) $value;
     var_dump($null); // Output: NULL
     ```

These examples illustrate different ways to perform typecasting in PHP, 
allowing you to manipulate and work with data of different types effectively within your applications.

    */


?>