<?php 
require_once 'classes/Product.php';

$food = new Product('Book', 8.99);



echo 'This '.  $food->getProductType() . ' price is '. $food->getProductPrice();
?>