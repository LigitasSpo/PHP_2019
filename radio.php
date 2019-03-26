<?php

if(isset($_GET['language'])) {
 $language = $_GET['language'];

 echo $language;
} else {
    echo "is not set";
}

?>




<form acrion="index.php" method="get">
<p>

<input type="radio" name="language" value="PHP"/> PHP<br>
<input type="radio" name="language" value="C"/> C++<br>
<input type="radio" name="language" value="BASIC"/> BASIC<br>
</p>
<p><input type="submit" value="submit"/>

</form>