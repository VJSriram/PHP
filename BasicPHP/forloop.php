<?php

/*
Syntax : 
for (insliation, condition, inc/dec) {
  // code block
}

*/
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  echo '<br/>';


?>

<?php
$text = 'Hello World';
for($i=0; $i < strlen($text); $i++){
    echo $text[$i] . '<br/>';
}


?>