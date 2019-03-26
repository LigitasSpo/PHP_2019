<?php

$num = 10;

switch ($num) {

    case 10:

    echo'Ten';

    break;

    case 9:

    echo'Nine';

    break;
    case 8:

    echo'Eight';

    break;

    default:
    echo 'number not recognized';
    
    break;
}


$name = "arnas";
switch ($name) {
    case 'ligitas':
    case 'Tomas':
    echo 'Hello there' . $name;
    break;
    default: 
    echo 'go away' . $name;
    break;
}

?>
