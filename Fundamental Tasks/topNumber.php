<?php
$number = intval(readline());
function sum($a){
    return array_sum(str_split($a));
}

function oddDigit($a){
   $odd = 0;
    for($i = 0;$i < $a;$i++) {
        $lastDigit = $a % 10;
        $a = $a / 10;
        if($lastDigit % 2 == 1){
            $odd++;
        }
    }
    if($odd > 0){
        return "true";
    }else{
        return "false";
    }

}
for($i = 1;$i <= $number;$i++){
    if(sum($i) % 8 == 0 && oddDigit($i) == "true"){
        echo $i . PHP_EOL;
    }
}