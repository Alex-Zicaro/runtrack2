<?php

if(isset($_COOKIE["nbvisites"])){
    setcookie($_COOKIE["nbvisites"]++);
}

if(isset($_POST['oui'])  )
{	
    $_COOKIE['nbvisites'] = 0;
}


echo ($_COOKIE["nbvisites"]);



?>
<form action="index.php" method="post">
    <input type="submit" value="Reset" id="nbvisites" name="nbvisites">
</form>