<?php
$firstNumber = readline();
$operator = readline();
$secondNumber = readline();
function calculate($a,$op,$b){
    $result = 0.0;
    switch ($op){
        case "/" : $result = ($a / $b); return $result; break;
        case "*" : $result = ($a * $b); return $result; break;
        case "+" : $result = ($a + $b); return $result; break;
        default : $result = ($a - $b); return $result; break;
    }
}
$calculated = calculate($firstNumber,$operator,$secondNumber);
printf("%.2f", $calculated);