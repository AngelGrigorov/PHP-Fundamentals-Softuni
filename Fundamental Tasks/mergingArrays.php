<?php
$first = array_map('intval', explode(" ", readline()));
$second = array_map('intval', explode(" ", readline()));
//$first = array_map('intval', explode(" ", "3 5 2 43 12 3 54 10 23"));
//$second = array_map('intval', explode(" ", "76 5 34 2 4 12"));
if(count($first)> count($second)) {
$newArray = array_splice($first,count($second));

    for ($i = 0; $i < count($second); $i++) {

        echo ($first[$i]) . " " . ($second[$i]) . " ";

    }
}else{
    $newArray = array_splice($second,count($first));
    for ($i = 0; $i < count($first); $i++) {

        echo ($first[$i]) . " " . ($second[$i]) . " ";
    }
}
echo implode(" ",$newArray);