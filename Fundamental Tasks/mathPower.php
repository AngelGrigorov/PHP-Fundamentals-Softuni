<?php
$number = readline();
$raised = readline();
function Math($a,$b){
    $sum = 1;
    for($i = 1;$i <=$b;$i++){
        $sum *=$a;
    }
    return $sum;
}
$sum = Math($number, $raised);
echo $sum;