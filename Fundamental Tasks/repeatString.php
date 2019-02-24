<?php
$string = readline();
$n = intval(readline());
function repeat($a,$b){
    $newString = "";
    for($i = 1;$i <= $b;$i++){
        $newString .= $a;
    }
    return $newString;
}
$newString = repeat($string,$n);
echo $newString;