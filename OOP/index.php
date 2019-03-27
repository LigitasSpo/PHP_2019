<?php 
require_once 'classes/Product.php';
require_once 'classes/Book.php';
$book = new Book('Children', 8.99,'123456789');


echo 'This '.  $book->getProductType() . ' book price is '. $book->getProductPrice(). ' and ispn: '.   $book->getProductIsbn();
?>