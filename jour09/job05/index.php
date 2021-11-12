<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT * FROM `étudiants` WHERE (YEAR(NOW()) - YEAR(naissance)) >= 18");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

?>
<html>
    <head>

    </head>
    <body>
<table border="1">
    <th>id</th>
    <th>Prenom</th>
    <th>Nom</th>
    <th>Date de naissance</th>
    <th>sexe</th>
    <th>email</th>

<tb>
    
<?php foreach ($etudiants as $value) { 
    echo "<tr>";
        echo "<td>" .  $value["id"]  . "</td>";
        echo "<td>" .  $value["prenom"]  . "</td>";
        echo "<td>" .  $value["nom"]  ."</td>"; 
        echo "<td>" .  $value["naissance"]  ."</td>"; 
        echo "<td>" .  $value["sexe"]  ."</td>"; 
        echo "<td>" .  $value["email"]  ."</td>"; 


        

}
?>