<?php
$type = readline();
$karats = intval(readline());

$array = [];
while(1){
    if(!key_exists($type,$array)){
        $array[$type]= $karats;
    }else{
        $array[$type] += $karats;
    }

    $type = readline();
    if($type == "stop"){
        break;
    }
    $karats = intval(readline());

}
foreach($array as $key => $value){
    echo $key . " -> " . $value ."K". PHP_EOL;
}