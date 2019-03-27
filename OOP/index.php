<?php 
require_once 'classes/Product.php';
require_once 'classes/Book.php';
require_once 'classes/count.php';
require_once 'classes/Calculator.php';
$book = new Book('Children', 8.99,'123456789');

echo $book->calculateProductVAT();
echo '<br>';
echo 'This '.  $book->getProductType() . ' book price is '. $book->getProductPrice(). ' and ispn: '.   $book->getProductIsbn();
echo '<br>';

$counter = new Count();

echo $counter->getCount();

echo '<br>';

$calc = new Calculator();
$calc->add(10);
$calc->add(10);
$calc->substract(2);


echo $calc->getTotal();

?>