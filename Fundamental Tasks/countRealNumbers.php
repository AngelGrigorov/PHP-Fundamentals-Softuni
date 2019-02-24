<?php
$numbers = readline();
$arr = explode(" ",$numbers);
$result = [];
foreach($arr as $num){
    if(!key_exists($num,$result)){
        $result[$num] = 1;
    }else{
        $result[$num]++;
    }
}
ksort($result);
foreach($result as $key => $val){
    echo $key . " -> " . $val . PHP_EOL;
}