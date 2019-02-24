<?php
$input = readline();
$array = [];
while($input != "End"){
$input = explode(" -> ",$input);
if(!isset($array[$input[0]])){
    $array[$input[0]] = [];
}
if(!in_array($input[1],$array[$input[0]])){
   array_push($array[$input[0]],$input[1]);

}
    $input = readline();
}
ksort($array);
foreach($array as $key => $value){
    echo $key . PHP_EOL;
    echo "-- ". implode(PHP_EOL . "-- ",$value) . PHP_EOL;
}