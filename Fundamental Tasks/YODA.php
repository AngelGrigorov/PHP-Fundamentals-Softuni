<?php
$money = floatval(readline());
$students = intval(readline());
$lightsaberPrice = floatval(readline());
$robePrice = floatval(readline());
$beltPrice = floatval(readline());
$temp = $students;
$freeBelts = 0;
while($temp >= 6){
    $temp -= 6;
    $freeBelts++;
}
$neededMoney = (($lightsaberPrice * ceil($students + ($students * 0.1))) +
    ($robePrice * $students) + (($students - $freeBelts) * $beltPrice));
if($money >= $neededMoney){
   $neededMoney =  sprintf("%0.2f",$neededMoney);

    echo "The money is enough - it would cost ".$neededMoney."lv.";
}else{
    $moreMoney = abs($money - $neededMoney);
    $moreMoney =  sprintf("%0.2f",$moreMoney );
    echo "Ivan Cho will need ".$moreMoney."lv more.";
}