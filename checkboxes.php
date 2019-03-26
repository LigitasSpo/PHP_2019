<?php

if(isset($_POST['aggre']) && $_POST['aggre'] == 'true') {
 echo "you aggred";
} else {
    echo "you must agee";
}

?>




<form acrion="index.php" method="post">
<p><input type="checkbox" name="aggre" value="true"/> I agree with terms and conditions</p>
<p><input type="submit" value="submit"/>

</form>