<?php session_start();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <style>
        .bot{
            margin-bottom: 1%;
            width: 40%;
        }
        .colonne{
            display: flex;
            flex-direction: column;
        }
    </style>
        <form class="colonne" action="index.php" method="post">
        <label class="bot" for="prenom">Balance ton blaze en dessous:</label>
        <input type="text" name="prenom" id="prenom">
        <label class="bot" for="valider"></label>
        <input type="submit" name="valider">
        <label class="bot" for="reset"></label>
        <input type="submit" name="reset" value="reset">
    </form><br/>

    <?php

    if (isset($_POST['reset'])) {
        $_SESSION['prenom']="";
    }

    if (isset($_POST) && isset($_POST['prenom'])) {
        $_SESSION['prenom'] =$_POST['prenom']. "<br/>" .$_SESSION['prenom']; 
} 
echo $_SESSION['prenom'];
?>
    </body>
</html>