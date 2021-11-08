<?php 

function bonjour($jour) {

if($jour){
    echo ("Bonjour <br>");
}
else {
    echo ("Bonsoir <br>");
}
return $jour;
}

bonjour($jour = true);
bonjour($jour = false);
?>