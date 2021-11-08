<html>
<form method="get" action="index.php">
    <label for="str">Str</label>
    <input type="text" id="str" name="str">
    <select id="fonction" name="fonction">
        <option>Gras</option>
        <option>Cesar</option>
        <option>plateforme</option>
    </select>
    <input type="submit">
</form>
<?php

foreach($_GET as $key=>$value){
    if($key=="str"){
        $string=$value;
    }elseif($key="fonction"){
        $fonction=$value;
    }
}
function gras($str){
    $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for($i=0;isset($str[$i]);$i++){
        for($j=0; isset($alphabet[$j]) && isset($str[$i]);$j++){
            if($str[$i] == $alphabet[$j] && isset($str[$i])){
                echo "<b>";
                while(isset($str[$i]) && $str[$i] !=""){
                    echo $str[$i];
                        $i++;
                }
                echo "</b>";
            }
            }
        if(!isset($alphabet[$j]) && isset($str[$i])){
            while( isset($str[$i]) && $str[$i]!=""){
                echo $str[$i];
                $i++;
            }
            echo("");
        }
    }
    }


if(isset($fonction)){
if($fonction=="Gras"){
    echo(gras($string));
}
}

?>
</html>