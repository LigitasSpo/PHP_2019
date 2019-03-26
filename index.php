<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form action='index.php' method='POST'>
    <p> your name <textarea name='text'> </textarea></p> 
    <input type='submit' value='submit'/>
    </form>
</body>
</html>
<?php

if (isset($_POST['text'])) {
    echo nl2br(htmlentities($_POST['text']));

}

// $name_len = strlen('Ligitas');

// echo "your name has $name_len letters";


// $input = $_GET['name'];
// $max_len = 5;

// if (strlen($input) > $max_len) {
//     echo 'to long';

// } else {
//     echo 'good';
// }



// $name = 'Ligitas Spondzevicius';

// $text = 'If this text is long enought it will trimm end to make it smaller';

// if (strlen($text) > 20){
// echo substr($text, 0, 20 ) . '...';
// } else {
// echo $text;
// }
 
// echo substr($name, 0, 5);

// $from_db = '<script> alert("!heelo"); </script>';
// $sanitised = htmlentities($from_db);

// echo $from_db;

// echo $sanitised;

