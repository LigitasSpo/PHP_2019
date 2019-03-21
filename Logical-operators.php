<?php

//logical operators

$num = 110;


if($num > 1 && $num <= 100) {
   echo 'number is fine';
} else {
    echo 'number must to be between 1 and 100';
}

$name = 'ligitas';
$age = 25;

if( $name == 'ligitas' && ( $age == '21' || $age == '25')) {
    echo 'hello there';
} else {
    echo 'go away.';
}
