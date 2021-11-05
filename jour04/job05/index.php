

<?php
if($_POST == true)
    if(isset($_POST["username"]) == "John" && isset($_POST["password"]) == "Rambo")
    {
        echo "C’est pas ma guerre";
    }
    else
    {
        echo "Votre pire cauchemar";
    }

?>
<style>
    #placement{
        display: flex;
        justify-content: center;
        flex-direction: column;

    }
</style>
<html>
    <body>
<form id="placement" action="./index.php" method="post">
            <label for="username">nom </label>
            <input type="text" id="username" name="username">
            <label for="password">prénom </label>
            <input type="password" id="password" name="password">
            <input type="submit" value="clique ici">
    </body>
</html>
