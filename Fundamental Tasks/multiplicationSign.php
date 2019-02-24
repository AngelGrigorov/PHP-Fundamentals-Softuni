<?php
$num1 = floatval(readline());
$num2 = floatval(readline());
$num3 = floatval(readline());

function multi($a,$b,$c){
    $newNum = $a * $b;
    $newNum *= $c;
    if($newNum > 0){
        return "positive";
    }
    else if($newNum == 0){
        return "zero";
    }else{
        return "negative";
    }
}
echo multi($num1,$num2,$num3);