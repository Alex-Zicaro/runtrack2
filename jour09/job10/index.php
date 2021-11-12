<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT * FROM salles ORDER BY capacite ASC");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);
var_dump($etudiants)
?>
<html>
    <head>

    </head>
    <body>
<table border="1">
    
    <th>Id</th>
    <th>Nom</th>
    <th>Capacité</th>
    <th>Etage</th>

<tb>
    
<?php foreach ($etudiants as $value) { 
    echo "<tr>";
        echo "<td>" .  $value["id"]  . "</td>";
        echo "<td>" .  $value["nom"]  . "</td>";
        echo "<td>" .  $value["capacite"]  . "</td>";
        echo "<td>" .  $value["id_etage"]  . "</td>";


        echo "</tr>";
        

}
?>