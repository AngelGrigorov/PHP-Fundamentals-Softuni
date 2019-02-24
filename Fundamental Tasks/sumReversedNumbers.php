<?php
$array = explode(" ",readline());
for($i = 0;$i < count($array); $i++){
    $array[$i] = strrev($array[$i]);
}
echo array_sum($array);