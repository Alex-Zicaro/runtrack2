<?php

if (isset($_POST['deco'])){
    unset($_COOKIE['prenom']);
}
if(isset($_POST['connexion'])){
    setcookie('prenom',$_POST['prenom'],time()+365*25*3600);
    header('Location: index.php');
}
// var_dump($_COOKIE);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    if(!isset($_COOKIE['prenom'])){
        echo '<form action="#" method="post">
        <input type="text" name="prenom">
        <input type="submit" value="connexion" name="connexion">
    </form>';
    }
    else {
        echo 'Bonjour ' . $_COOKIE['prenom'] . " !";
        echo '<br/> <form action="#" method="post">
        <input type="submit" value="déconecter" name="deco">
        </form>';
    }
    'Bonjour '.$cookie_name;
	
?>

<html>
	<head>
	</head>
	<body>
	</body>
</html>