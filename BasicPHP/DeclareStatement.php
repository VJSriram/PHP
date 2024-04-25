<?php

// declare - ticks
// We won't use it


// declare - encoding
// We won't use it


// declare - strict_types
/*
The declare(strict_types=1); directive in PHP is used to enforce strict types checking
for scalar type declarations(such as int, float, string, and bool) in functions and methods. 
When this directive is set at the beginning of a script or a file, it ensures that all scalar type
declarations in that script or file must match exactly with the specified types. 

*/


declare(strict_types=1);

function sum(int $x, int $y){
    return $x + $y;
}

//echo sum('5', 10);



?>