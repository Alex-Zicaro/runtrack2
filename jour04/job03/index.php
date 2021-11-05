<?php
	
    
    $c=0;
	foreach ($_POST as $key => $value) 
	{
        // if (isset($value[$i]) == true)
		if($value != "")
		{
			$c++;
		}
	}

	echo"il y a $c valeurs <br> ";

var_dump($_POST);
?>


<!DOCTYPE html>
<html>
<head>
    <body>
        <form action="./index.php" method="post">
            <label for="fname">first name </label>
            <input type="text" id="fname" name="fname">
            <label for="lname">last name </label>
            <input type="text" id="lname" name="lname">
            <input type="submit" value="envoyer">
    </form>
    </body>
</head>

</html>