<?php 

$al = 1;

while ($al <= 100) {

    if ($al %3 === 0 ) {
        print ("$al fizz <br>");
    } 
    elseif ($al %5 === 0 ) {
        print ("$al buzz <br>");
    } 
    elseif ($al %3 === 0 && $al %5 === 0) {
        print (" $al fizz buzz ");
    }
    else {
        print ("$al <br>");
    }
    $al++;
}

?>