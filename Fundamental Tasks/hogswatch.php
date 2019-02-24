<?php
$homes = intval(readline());
$visitedHomes = 0;
$presents = intval(readline());
$initialPresents = $presents;
$additionalPresents = 0;
$timesBack = 0;
for($i = 0;$i < $homes;$i++){
    $children = intval(readline());
    $visitedHomes++;
    if($presents - $children >= 0){
        $presents -= $children;
    }else{
        $timesBack++;
        $neededPresents = $children - $presents;
        $presents = floor($initialPresents / $visitedHomes) * ($homes - $visitedHomes) + $neededPresents;
        $additionalPresents += $presents;
        $presents -= $children;

    }
}
if($timesBack > 0){
    echo $timesBack . PHP_EOL;
    echo $additionalPresents;
}else {
    echo $presents;
}