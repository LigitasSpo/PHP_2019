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

<h1> Website </h1>
 <div>

 <a href="index.php?p=home">Home</a>
 <a href="index.php?p=about">About us</a>
 <a href="index.php?p=news">news</a>
 </div>

 <div>
<?php
$pages_dir = 'pages';


 if(!empty($_GET['p'])) {
    $p = $_GET['p'];
    $pages = scandir($pages_dir, 0);
    unset($pages[0], $pages[1]);

    if (in_array($p.'.inc.php', $pages)) {
        include($pages_dir.'/'. $p .'.inc.php');
        
    } else {
        echo 'Sorry, page not found';
    }
 } else {
    include($pages_dir.'/home.inc.php');
 }
 ?>
 </div>
     
 </body>
 </html>