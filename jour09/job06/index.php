<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT COUNT(*) FROM étudiants");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);
var_dump($etudiants)
?>
<html>
    <head>

    </head>
    <body>
<table border="1">
    
    <th>nb_etudiants</th>

<tb>
    
<?php foreach ($etudiants as $value) { 
    echo "<tr>";
        echo "<td>" .  $value["COUNT(*)"]  . "</td>";
        echo "</tr>";
        

}
?>