<?php
$lostGames = intval(readline());
$headsetPrice = floatval(readline());
$mousePrice = floatval(readline());
$keyboardPrice = floatval(readline());
$displayPrice = floatval(readline());
$expenses = 0.0;
for($i = 1;$i <= $lostGames;$i++){
    if($i % 2 == 0){
        $expenses += $headsetPrice;
    }
     if($i % 3 == 0){
        $expenses += $mousePrice;
    }
     if($i % 6 == 0 ){
        $expenses += $keyboardPrice;
     }
     if ($i % 12 == 0){
         $expenses += $displayPrice;
     }
}
printf("Rage expenses: %.2f lv.",round($expenses));