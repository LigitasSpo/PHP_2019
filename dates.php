<?php 

// echo date("Y/m/d");
// echo date("H/i/s");
 

$currentTime = date("H:i:s");

$goalTime = "17:32:00";


echo "Current time: $currentTime <br> Goal time: $goalTime";

if( $currentTime >= $goalTime) {
    echo "<b> Goal has been reached </b>";
}