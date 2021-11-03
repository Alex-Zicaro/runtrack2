<?php 

$al = 0;
while ($al <= 100) {

    

if  ($al >= 0 && $al <= 20) {
    echo ("<i> $al </i> <br>");
}

elseif ($al == 42 ) {
    echo ("La Plateforme_ <br>");
}

elseif ($al >= 25 && $al <= 50) {
    echo ("<u> $al </u> <br>");
}

else{
    echo ("$al <br>");
}

$al++;
}

?>
