<?php

// Nested functions

// Not recommeded to use nested functions
function foo(){
    echo 'Foo';
    function bar(){
        echo 'Bar';
    }
}

foo();
bar();


?>