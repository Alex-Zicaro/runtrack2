<?php


    function occurrences($str,$char){
        $x= 0;
    for ($i = 0; isset($str[$i]) ; $i++) {  
    
        if ($char == $str[$i]){
$x++;
    }
    }
    return $x;
    }
echo(occurrences("anticonstitutionnellement","n"))



    ?>

