<?php 
require_once 'classes/Product.php';
require_once 'classes/Book.php';
require_once 'classes/count.php';
require_once 'classes/Calculator.php';
require_once 'classes/Database.php';

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

echo '<br>';


$db = new Database('localhost','root','','test');
$db->query("SELECT `articles`. `title`,`articles`. `id` FROM `articles`");


if ($db->numRows() == 0) {
    echo 'No articles';
} else {
    foreach ($db->rows() as $article) {
        echo $article['id']. '-' . $article['title']. '<br>';

    }
     echo '<p>'. $db->numRows(), 'Articles </p>';
}

?>