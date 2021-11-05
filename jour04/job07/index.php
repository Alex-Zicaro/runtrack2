<!DOCTYPE html>
<html lang="fr">


    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>
        Jean neymar
    </h1>
    <img src="../img/OIP.jfif">
    <form action="./index.php" method="get">

        <label for="largeur">largeur</label><br>
        <input type="text" id="largeur" name="largeur" placeholder="saisissez un nombre"><br><br>

        <label for="hauteur">hauteur</label><br>
        <input type="text" id="hauteur" name="hauteur" placeholder="saisissez un nombre"><br><br>

        <input type="submit" value="Soumettre">

    </form>


    <?php

    $l = $_GET['largeur'];
    $h= $_GET['hauteur'];

    for ($x = 1; $x <= $h ; $x++) {
        echo "<br>/";

        for ($i = 1; $i < $x; $i++) {
            echo "_";
        }
        echo "\\";
    }
    for ($x = 1; $x < $l / 2; $x++) {
        echo "<br>|";
        for ($y = 0; $y <= $l; $y++) {
            echo "";
        }
        echo  "|";
    }

    echo  "<br>|";
    for ($i = 1; $i < $_GET['hauteur']; $i++) {
        echo "_";
    }


    echo  "|";


    ?>


</body>

</html>