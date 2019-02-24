<?php
$budget = floatval(readline());
$students = intval(readline());
$flourPrice = floatval(readline());
$eggPrice = floatval(readline());
$apronPrice = floatval(readline());
$freeFlour = 0;
for($i = 1;$i <= $students;$i++){
    if($i % 5 == 0){
        $freeFlour++;
    }
}
$neededMoney = ($apronPrice * ($students + ceil($students * 0.2))) +
    ($eggPrice * 10 * $students) + ($flourPrice *($students - $freeFlour));

if($neededMoney > $budget){
    printf("%.2f"."$ more needed.",$neededMoney - $budget);

}else{
    printf("Items purchased for %.2f"."$.",$neededMoney);
}