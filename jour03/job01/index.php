<?php

$tableau = array(200, 204, 173, 98, 171, 404, 459);
$i = 0;
while (isset($tableau[$i])) { // <= 6 éléments dans mon tableau

        if($tableau[$i]%2 == 0){
            echo ($tableau[$i]."est paire <br>");
        }
        else
        {
            echo ($tableau[$i]."est impaire <br>");
        }
$i++;
}



?>