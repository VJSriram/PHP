<?php

$age = 20;

if($age==25){
    echo "Age is equal to 25, so you are eligible to drive<br>";
}
elseif($age>25){
    echo "Age is greater than 25 and less than 65, so you are eligible to drive<br>";
}
elseif($age>=25){
    echo "You are over 65, so you are not eligible to drive by yourself you should have a companion<br>";
}
elseif($age==55){
    echo "Age is greater than 25 and less than 65, eligible criteria to drive<br>";
}
else {
    echo "You are not eligible to drive";
}
echo "Done";

?>