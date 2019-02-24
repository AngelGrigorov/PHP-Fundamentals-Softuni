<?php
$first = readline();
$second = readline();
$command = readline();
$dictionary = [];
$first = explode(" | ",$first);
for($i=0;$i<count($first);$i++){
    list($name,$definition) = explode(": ",$first[$i]);
    if(!key_exists($name,$dictionary)){
        $dictionary[$name] = [];
        $dictionary[$name][] = $definition;
    }else{
        $dictionary[$name][] = $definition;
    }
}
$second = explode(" | ",$second);
for($j=0;$j<count($second);$j++){
    if(key_exists($second[$j],$dictionary)){
        $name = $second[$j];
        echo $name . PHP_EOL;
        for($k = 0;$k<count($dictionary[$name]);$k++){
            usort($dictionary[$name] ,function ($a,$b){
                return strlen($b) <=> strlen($a);
            });
            echo "-" . $dictionary[$name][$k] . PHP_EOL;
        }
    }
}
if($command == "End"){
    return;
}else if($command == "List"){
    ksort($dictionary);
    foreach($dictionary as $name =>$value){
        echo $name . " ";
    }
}

//var_dump($dictionary);
