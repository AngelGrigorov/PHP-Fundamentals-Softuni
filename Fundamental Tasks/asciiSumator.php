<?php
$symbol1 = readline();
$symbol2 = readline();
$string = readline();
$sum = 0;
if(ord($symbol1) < ord($symbol2)){
    $first = $symbol1;
    $second = $symbol2;
}else{
    $first = $symbol2;
    $second = $symbol1;
}
for($i = 0;$i<strlen($string);$i++){
   if(ord($string[$i]) > ord($first) && ord($string[$i]) < ord($second)){
       $sum += ord($string[$i]);
   }
}
echo $sum;