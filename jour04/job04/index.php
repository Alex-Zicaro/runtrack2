<!DOCTYPE html>
<html>
    <br>
    <br>

<br>
<br>
<br>
<form action="./index.php" method="post">
            <label for="fname">nom </label>
            <input type="text" id="nom" name="fname">
            <label for="lname">prénom </label>
            <input type="text" id="prénom" name="lname">
            <label for="mail">email</label>
        	<input type="email" id="mail" name="mail">
	        <label for="age">âge</label>
	        <input type="number" id="age" name="age">
            <input type="submit" value="envoyer">
    </form>
    <table border="2">
    <tr>
        <th>
            Argument
        </th>
        <th>
            Valeur
        </th>
    </tr>
    


<?php

$c=0;
foreach ($_POST as $key => $value) 
{
    // if (isset($value[$i]) == true)
    if($value != "")
    {
        $c++;
    }
    
    ("<tr> <td>". $key . "</td>"
    ." <td>". $value . "</td> </tr>");
    
    var_dump($_POST);
}
?>
</html>