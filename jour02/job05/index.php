<?php
//https://www.maxicours.com/se/cours/les-nombres-premiers---terminale/#:~:text=1%20Un%20nombre%20premier%20admet%20exactement%20deux%20diviseurs,r%C3%A9partis%20irr%C3%A9guli%C3%A8rement%2C%20et%20se%20rar%C3%A9fient.%20Plus%20d%27articles...%20


$nombre = 0;



while ($nombre <= 1000)
{
    $nombre_verif = 1;
    $multiple= 0;

    while ($nombre_verif <= $nombre)
    {   
        if($nombre % $nombre_verif == 0)
        {
        $multiple++;
        }

        $nombre_verif++;
    }

    if ($multiple == 2)
    echo $nombre. '<br>';

    $nombre++;
}
?>