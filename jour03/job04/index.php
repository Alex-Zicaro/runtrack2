<?php 

$str = "Dans l'espace, personne ne
vous entend crier.";

function mystrlen($str) // mystrlen = strlen
{
$count = 0 ;
while((isset($str[$count++]) != "") );
return $count; 
}

$mycount = mystrlen($str);
echo 'Il y a ' . $mycount . ' caracteres dans cette phrase. ';


?>