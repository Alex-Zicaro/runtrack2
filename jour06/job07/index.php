<?php

$tab=array("abc","ghi","def");

function bubblesort($tab,$croissant){
    if($croissant==true){
        var_dump($tab);
    }

    elseif($croissant == false){
        
    }

    foreach($tab as $value){
        echo $value."<br>";
    }
}

bubblesort($tab,true);

?>