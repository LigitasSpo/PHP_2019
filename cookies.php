<?php


$exp = time()+86400;
// setcookie("name","Ligita", $exp);

// $exp_unset = time()-86400;

// setcookie("name","",$exp_unset);

if(isset($__COOKIE["name"])) {
    echo 'cookie is set';
} else {
    echo 'cookie is unset';
}
?>


