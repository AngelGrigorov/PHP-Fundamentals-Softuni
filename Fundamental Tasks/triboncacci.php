<?php

function fib($n)
{
    $a = 1;
    $b = 1;
    $c = 2;
    $result =  $a . " " . $b . " " . $c . " " ;
    for($i = 3; $i < $n; $i++) {
        $d = $a + $b + $c;
        $a = $b;
        $b = $c;
        $c = $d;
        $result .= $d . " ";
    }
    return $result;
}

$n = intval(readline());

$result = fib($n);
if($n == 2){
    echo "1 1";
}
if($n <= 1){
    echo "1";
}
if($n >= 3){
    echo $result;
}