<?php
$n = abs(intval(readline()));
$n = str_split($n);
function multi($n) : int {

    $oddSum = 0;
    $evenSum =0;
    for($i = 0;$i <= count($n);$i++){
        if($n[$i] % 2 == 0){
            $evenSum += $n[$i];
        }
        else{
            $oddSum +=$n[$i];
        }
    }
    $multi = $oddSum * $evenSum;
    return $multi;
}
$calculatedArray = multi($n);
echo $calculatedArray;