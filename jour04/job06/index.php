


<html>
<form action="./index.php" method="get">
            <label for="number">nom </label>
            <input type="text" id="number" name="number">
            <input type="submit" value="envoyer">
</form>
</html>
<?php
$i = 0;

if($_GET == true) { 

    if($_GET["number"] %2 == 0){
        echo ($_GET["number"]." est paire <br>");
    }
    else
    {
        echo ($_GET["number"]." est impaire <br>");
    }
$i++;
}


?>