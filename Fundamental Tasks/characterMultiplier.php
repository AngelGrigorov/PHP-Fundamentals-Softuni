<?php
function multiplier($input){
   $sum = 0;
    list($first,$second) = explode(" ",$input);
    if(strlen($first) == strlen($second)){
        for($i=0;$i<strlen($first);$i++){
           $sum +=  (ord($first[$i]) * ord($second[$i]));
        }
    }else if(strlen($first) > strlen($second)){

        for($i=0;$i<strlen($second);$i++){
            $sum +=  (ord($first[$i]) * ord($second[$i]));
        }
        for($j = strlen($second);$j<strlen($first);$j++){
            $sum += (ord($first[$j]) * 1);
        }
    }else{

        for($i=0;$i<strlen($first);$i++){
            $sum +=  (ord($first[$i]) * ord($second[$i]));
        }
        for($j = strlen($first);$j<strlen($second);$j++){
            $sum += (ord($second[$j]) * 1);
        }
    }
    return $sum;
}
$result = multiplier(readline());
echo $result;