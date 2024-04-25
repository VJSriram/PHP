<?php

$age = 101;

if($age <= 18){
    echo "You may enter this site";
}
elseif($age <= 0){
    echo "You were just born";
}
elseif($age >= 100){
    echo "You are too old to enter this site";
}
else {
    echo "You must be 18 plus to enter";
}


?>