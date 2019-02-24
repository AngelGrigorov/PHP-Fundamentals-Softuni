<?php
$lines = readline();
for($i = 0;$i<$lines;$i++){
    $products = readline();
    $array[$i] = $products;
}
sort($array);
for($j = 0;$j < count($array);$j++){
    echo $j+1 . ".".$array[$j] . PHP_EOL;
}