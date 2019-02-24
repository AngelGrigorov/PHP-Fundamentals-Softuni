<?php
$arr = array_map("intval",explode(' ',readline()));
$uniqueNumber = intval(readline());
for($i = 0;$i < count($arr);$i++){
    for($j = $i+1;$j < count($arr);$j++){
        if($uniqueNumber - $arr[$i] == $arr[$j]){
            echo $arr[$i] . " " . $arr[$j] . PHP_EOL;
        }
    }
}