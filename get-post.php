//GET

<?php
$name = $_GET['name'];
$age = $_GET['age'];

if(isset($name) && isset($age)) {
    if (!empty($name)&& !empty($age)) {
        echo 'my name is ' .$name . ' and my age is ' .$age;
    } else {
        echo 'Pleas type something';
    }
}


$login = 'login';
$password = 'password';

if(isset($_POST['login']) && isset($_POST['password'])) {
    if( !empty(($_POST['login'])) && !empty(($_POST['password']))) {
        if( $_POST['login'] == $login && $_POST['password'] == $password) {
            echo 'Your logged in';
        } else {
            echo 'Loggin or password incorect, pleas try again';
        }
    } else {
        echo 'Type something';
    }
   
}



if(isset($_POST['login'])) {
    $name = $_POST['login'];
    if(!empty($name)) {
       $sentence = $name . ' just started to learn PHP';
    } else {
        echo 'enter something';
    }
}


$name = 'asd';

if(isset($_POST['login'])&& !empty($_POST['login'])) {
    $name = $_POST['login'];
}

if($name == 'Ligitas') {
    echo 'Hello, Ligitas';
} else {
    ?>

    <form action="index.php" method="POST">
Your name <br> <input type="text" name="login"><br>
<input type="submit" value="submit">
</form>

<?php
 
}

?>