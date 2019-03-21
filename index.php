<?php

//logical operators

/*
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
*/

//Switches
/*
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
*/

// arrays

/*
$names = array('Ligitas'=> 21,'Tadas' => 50,'Tomas' => 100 );
$names['Josh'] = 18;
echo $names['Josh'];
*/


// multidimentional arrays

/*
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

*/

//loops
/*
$num = 30;

while($num >= 0):
    echo $num.'<br>';
    $num--;
endwhile;
*/

//do while loop
/*
$num = 1;

do {
    echo 'this <br>';
    $num++;
} while ($num <=10)
*/

//for loops

/*
for ($num=10; $num >= 1; $num--) {
    echo $num . '<br>' ;
}
*/

//for each
/*
$num = 1;
$names = array(
    'alex'=>21,
    'tom'=>16,
    'bob'=>41
);

foreach($names as $name =>$value) {
    if($name != 'alex') {
        echo $name . ' age is '. $value. '<br>';
    }

}
*/

//functions

/*
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
*/

//GET

/*
$name = $_GET['name'];
$age = $_GET['age'];

if(isset($name) && isset($age)) {
    if (!empty($name)&& !empty($age)) {
        echo 'my name is ' .$name . ' and my age is ' .$age;
    } else {
        echo 'Pleas type something';
    }
}
*/
/*
$login = 'login';
$password = 'password';

if(isset($_POST['login']) && isset($_POST['password'])) {
    if( !empty(($_POST['login'])) && !empty(($_POST['password']))) {
        if( $_POST['login'] == $login && $_POST['password'] == $password) {
            echo 'Your logged in';
        } else {
            echo 'Loggin or password incorect, pleas try again';
        }
    } else {
        echo 'Type something';
    }
   
}
*/

/*
if(isset($_POST['login'])) {
    $name = $_POST['login'];
    if(!empty($name)) {
       $sentence = $name . ' just started to learn PHP';
    } else {
        echo 'enter something';
    }
}
*/
/*
$name = 'asd';

if(isset($_POST['login'])&& !empty($_POST['login'])) {
    $name = $_POST['login'];
}

if($name == 'Ligitas') {
    echo 'Hello, Ligitas';
} else {
    ?>

    <form action="index.php" method="POST">
Your name <br> <input type="text" name="login"><br>
<input type="submit" value="submit">
</form>

<?php
 
}

*/

$levels = array(
    1 => 'Level 1',
    2 => 'Level 2',
    3 => 'Level 3'
);

foreach($levels as $key => $level) {
    echo $key . ' is ' . $level. '<br>';
}
?>



