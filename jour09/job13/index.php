
<?php
$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT salles.nom AS 'sal' ,etage.nom  FROM salles INNER JOIN etage ON etage.id = salles.id_etage");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);
var_dump($etudiants);
?>
<html>
    <head>

    </head>
    <body>
<table border="1">
    <th></th>
    <th>étage</th>

<tb>
    
<?php foreach ($etudiants as  $value) { 
    echo "<tr>";
    echo "<td>" .  $value["nom"]  . "</td>";
    echo "<td>" .  $value["sal"]  . "</td>";


        }    

?>