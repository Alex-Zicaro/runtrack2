<?php

$myString = "caractère"; 
$myBool = true;
$myInt = 10;
$myFloat = 1.5;


?>

<html>

<table border="1">
    <theader>
    <tr>
        <td>
            type
        </td>
        <td>
            nom
        </td>
        <td>
            valeur
        </td>
    </tr>
    <theader>
    <tr>
        <td>
            booléen
        </td>
        <td>
            $myBool
        </td>
        <td>
            <?php echo $myBool;?>
        </td>
    </tr>
    <tr>
        <td>
            string
        </td>
        <td>
            $myString
        </td>
        <td>
            <?php echo $myString; ?>
        </td>
    </tr>
    <tr>
        <td>
            integer
        </td>
        <td>
            $myInt
        </td>
        <td>
            <?php echo $myInt; ?>
        </td>
    </tr>
    <tr>
        <td>
            float
        </td>
        <td>
            $myFloat
        </td>
        <td>
            <?php echo $myFloat; ?>
        </td>
    </tr>
    

        



    </html>
    