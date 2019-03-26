<?php

// arrays

$names = array('Ligitas'=> 21,'Tadas' => 50,'Tomas' => 100 );
$names['Josh'] = 18;
echo $names['Josh'];
*/


// multidimentional arrays


$names = array(
    'Ligitas'=> array(
        'age'=>24,
        'hair' => 'black',
        'food' => array('pica','cola')
    ),
    'Tadas' =>array(
        'age'=>82,
        'hair' => 'white' 
    ),
    'Tomas' =>array(
        'age'=>21,
        'hair' => 'blond' 
    )  
);
echo $names['Ligitas']['hair'];

?>