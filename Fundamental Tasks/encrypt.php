<?php
$n = intval(readline());
$sum = [];
for($i = 0; $i <= $n; $i++){
    $sumDigits = 0;
    $name = explode(" ",readline());
    for($j=0; $j<= count($name);$j++){
        if($name[$j] == "A" || $name [$j] == "E" || $name[$j] == "I" || $name[$j] == "O" || $name[$j] == "U" || $name[$j] == "a" || $name [$j] == "e" || $name[$j] == "i"
            || $name[$j] == "o" || $name[$j] == "u"){
            $char = ord($name[$j]);
            $sumDigits += ($char * count($name));
        }else{
            $char = ord($name[$j]);
            $sumDigits += ($char/ count($name));
        }
    }
    $sum[$i] = $sumDigits;
}
sort($sum);
for($k = 0;$k < count($sum);$k++){
    echo $sum[$k] . PHP_EOL;
}