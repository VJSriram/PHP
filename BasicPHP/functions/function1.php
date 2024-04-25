<?php

declare(strict_types=1);

function foo(): int {
    return 1 ;
}



function foobar(): string {
    return 'Hello';
}

var_dump(foo());
echo '<br/>';  
var_dump(foobar());
?>