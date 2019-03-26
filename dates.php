<?php 

// echo date("Y/m/d");
// echo date("H/i/s");


$offset = strtotime("+2 weeks");


echo date("Y/m/d", $offset);