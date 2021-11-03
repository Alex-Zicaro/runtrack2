<?php 

$al = 1;

while ($al <= 100) {

    if ($al %3 === 0 && $al %5 !== 0 ) {
        print_r ('fizz <br>');
    } 
    elseif ($al %3 !== 0 && $al %5 === 0 ) {
        print_r ("buzz <br>");
    } 
    elseif ($al %3 === 0 && $al %5 === 0) {
        print_r ("fizz buzz <br>");
    }
    else {
        print_r ("$al <br>");
    }
    $al++;
}

?>