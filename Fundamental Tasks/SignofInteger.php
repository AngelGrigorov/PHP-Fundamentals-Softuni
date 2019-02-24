<?php
$n = intval(readline());
function sign($b){
    if ($b > 0){
        return "positive";
    }
    else if($b < 0){
        return "negative";
    }
    else{
        return "zero";
    }
}
$sign = sign($n);
echo "The number $n is $sign" . ".";
