<?php


$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT prenom, nom, naissance FROM étudiants WHERE sexe= 'femme'");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);


?>

<html>
    <head>

    </head>
    <body>
<table border="1">
    
    <th>Prenom</th>
    <th>Nom</th>
    <th>Date de naissance</th>

<tb>
    
<?php foreach ($etudiiants as $value) { 
    echo "<tr>";
        echo "<td>" .  $value["prenom"]  . "</td>";
        echo "<td>" .  $value["nom"]  ."</td>"; 
        echo "<td>" .  $value["naissance"]  ."</td>"; 

        

}
?>