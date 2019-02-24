<?php
$pokemonPower = intval(readline());
$distance = intval(readline());
$exhaustingFactor = intval(readline());
$startingPower = $pokemonPower;
$count = 0;

while($pokemonPower >= $distance){
    $pokemonPower -= $distance;
    $count++;
if($pokemonPower === intval($startingPower * 0.5) && $exhaustingFactor != 0){
 $pokemonPower /= $exhaustingFactor;
}
}
echo intval($pokemonPower) . PHP_EOL;
echo $count;

