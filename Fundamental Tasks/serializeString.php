<?php
$array = [];
$string = readline();
for($i=0;$i<strlen($string);$i++){
    if(!key_exists($string[$i],$array)){
        $array[$string[$i]] = [];
    }
array_push($array[$string[$i]],$i);

}
foreach($array as $key => $value){
    echo "$key:" . implode("/",$value) . PHP_EOL;
}