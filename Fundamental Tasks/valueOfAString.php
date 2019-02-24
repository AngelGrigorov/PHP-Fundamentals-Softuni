<?php
$string = readline();
$rule = readline();
$sum = 0;
if($rule == "LOWERCASE"){
    for($i=0;$i<strlen($string);$i++){
        if(ord($string[$i])> 96 && ord($string[$i]) < 123){
            $sum += ord($string[$i]);
        }
    }
}else{
    for($i=0;$i<strlen($string);$i++){
        if(ord($string[$i])> 64 && ord($string[$i]) < 91){
            $sum += ord($string[$i]);
        }
    }

}
echo "The total sum is: $sum";