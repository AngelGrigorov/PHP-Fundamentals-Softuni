<?php

$pattern = '/^>+(?<furniture>[A-Z]+[a-z]*)+<<(?<price>\d+\.?\d+)+!(?<quantity>\d+)\b/';
$array = [];
$spendMoney = 0.0;
while(($input = readline()) != "Purchase"){
    preg_match_all($pattern,$input,$matches);
    $array[] = $matches;
}
foreach($array as $match){
    $spendMoney += ($match[1] * $match[2]);
}
var_dump($array);
echo $spendMoney;