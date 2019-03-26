<?php
//loops

$num = 30;

while($num >= 0):
    echo $num.'<br>';
    $num--;
endwhile;


//do while loop

$num = 1;

do {
    echo 'this <br>';
    $num++;
} while ($num <=10)


//for loops


for ($num=10; $num >= 1; $num--) {
    echo $num . '<br>' ;
}


//for each

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

?>