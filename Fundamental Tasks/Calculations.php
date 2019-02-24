<?php
function add($a, $b){
    $op = $a + $b;
    return $op;
}
function multiply($a, $b){
    $op = $a * $b;
    return $op;
}
function subtract($a, $b){
    $op = $a - $b;
    return $op;
}
function divide($a, $b){
    $op = $a / $b;
    return $op;
}
$command = readline();
$a = readline();
$b = readline();

switch($command){
    case "add" :
        $result = add($a , $b);
        break;
    case "multiply" :
        $result = multiply($a, $b);
        break;
    case "subtract" :
        $result = subtract($a, $b);
        break;
    default :
        $result = divide($a, $b);
        break;
}
echo $result;