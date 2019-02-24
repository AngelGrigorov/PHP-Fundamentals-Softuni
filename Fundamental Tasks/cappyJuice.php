<?php
$input = readline();
$products = [];
$bottled = [];
while($input != "End"){
    $input = explode("=> ",$input);
    if(!key_exists($input[0],$products)){
        $products[$input[0]] = 0;
    }
    $products[$input[0]] += $input[1];
if($products[$input[0]] >= 1000){
    $bottled[$input[0]] = intval($products[$input[0]] / 1000);
}
    $input = readline();
}
foreach($bottled as $key => $value){
    echo "$key=> $value" . PHP_EOL;
}