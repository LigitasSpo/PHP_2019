<?php
//functions


function name($name, $age) {
    return 'my name is ' .$name. 'and my age is '. $age;
}

function add($num1, $num2) {
    $result = $num1 + $num2;
    return $result;
}

$returnValue = name('billy', '10');

echo $returnValue;

echo add(10, 10);



?>