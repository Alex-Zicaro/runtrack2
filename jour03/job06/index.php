<?php

$str ="Les choses que l'on
possede finissent par nous posseder.";

function mystrrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
$str2 = mystrrev($str);
echo $str2;
?>