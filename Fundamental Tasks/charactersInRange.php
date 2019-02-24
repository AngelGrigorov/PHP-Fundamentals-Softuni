<?php
$first = readline();
$second = readline();
function between($a,$b){
$leftOne = $a;
$rightOne = $b;
if(ord($b) < ord($a)){
    $leftOne = $b;
    $rightOne = $a;
}
    $string = chr(ord($leftOne) + 1) . " ";
    for($i = ord($leftOne)+2;$i < ord($rightOne);$i++){
        $string .= chr($i) . " ";
    }
    return $string;
}
$between = between($first,$second);
echo $between;