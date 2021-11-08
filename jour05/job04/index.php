<?php

function calcule($a,$opérateur,$b ){
switch($opérateur){
    case"+":
        $resultat = $a + $b;
        break;
    case"-":
        $resultat = $a - $b;
        break;
    case"/":
        $resultat = $a / $b;
        break;  
    case"*":
        $resultat = $a * $b;
        break;
    case"%":
        $resultat = $a % $b ;
        break;
    
}
return $resultat;
}

echo(calcule(10,"*",10));


?>