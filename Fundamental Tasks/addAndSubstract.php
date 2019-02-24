<?php
$a = intval(readline());
$b = intval(readline());
$c = intval(readline());
function sum($a,$b){
    return $a + $b;
}
function subtract($a,$b){
    return $a - $b;
}
$result = subtract(sum($a,$b),$c);
echo $result;