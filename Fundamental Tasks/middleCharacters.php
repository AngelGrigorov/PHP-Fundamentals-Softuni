<?php
$string = readline();
$string = str_split($string);
function middle($a){
    if(count($a) % 2 == 0){
        $sign = $a[(count($a) / 2) - 1];
         return $sign . $a[(count($a) / 2)];
    }else{
        $sign = $a[(count($a) / 2)];
        return $sign;
    }
}
$result = middle($string);
echo $result;