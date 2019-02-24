<?php
$a = intval(readline());
$b = intval(readline());
$c = intval(readline());
function sorting($a,$b,$c){
    if($a < $b && $a < $c){
        return $a;
    }else if($b < $a && $b < $c){
        return $b;
    }else{
        return $c;
    }
}
$smallest = sorting($a,$b,$c);
echo $smallest;
