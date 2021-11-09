<?php

if(isset($_COOKIE["nbvisites"])){
    setcookie("nbvisites",$_COOKIE["nbvisites"]++);
}
else{
    setcookie("nbvisites",0);
}

foreach($_POST as $key=>$value){
    $value=0;
    $_COOKIE["nbvisites"]=$value;
setcookie("nbvisites",0);

}
echo ($_COOKIE["nbvisites"]);



?>
<form action="index.php" method="post">
    <input type="submit" value="Reset" id="nbvisites" name="nbvisites">
</form>