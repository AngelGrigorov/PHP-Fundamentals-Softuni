<?php
$input = explode(", ",readline());
$towns = [];
for($i = 0;$i < count($input);$i+=2){
    if(!isset($towns[$input[$i]])){
        $towns[$input[$i]] = 0;

    }
    $income = intval($input[$i+1]);
    $towns[$input[$i]] += $income;
}
foreach ($towns as $key => $value){
    echo "$key => $value" . PHP_EOL;
}