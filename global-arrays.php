<?php


$GLOBALS['levels'] = array(
    1 => array(
        'name'=>'Level 1',
        'desc'=> 'This is Level 1'
    ),
    2 => array(
        'name'=>'Level 2',
        'desc'=> 'This is Level 2'
    ),
    3 => array(
        'name'=>'Level 3',
        'desc'=> 'This is Level 2'
        )
);

echo '<pre>', print_r($GLOBALS['levels'], true), '</pre>';


function level_date($levels, $data) {
if(array_key_exists($levels, $GLOBALS['levels']) === true ) {
    return $GLOBALS['levels'][$levels][$data];
} else {
    return false;
}

}

echo level_date(1, 'desc');

?>


