<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT * FROM salles");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

?>
<html>
    <head>

    </head>
    <body>
<table border="1">
    
    <th>Nom</th>
    <th>Capacité</th>

<tb>
    
<?php foreach ($etudiants as $value) { 
    echo "<tr>";
        echo "<td>" .  $value["nom"]  . "</td>";
        echo "<td>" .  $value["capacite"]  ."</td>"; 

        

}
?>