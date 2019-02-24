<?php
$array = array_map('intval',explode(' ', readline()));
//$array = [2, 1, 1, 2, 3, 3, 2, 2, 2, 1];
$max = 1;

$mostFrequent = 0;
for ($i = 0; $i < count($array); $i++) {
    $currIndex = $array[$i];
    $longest = 0;

    for ($j = $i; $j < count($array); $j++) {
        if ($currIndex == $array[$j]) {
            $longest++;
            if ($longest > $max) {
                $max = $longest;
                $mostFrequent = $currIndex;
            }
        } else {
            break;
        }
    }
}
for ($k = 0; $k < $max; $k++) {
    echo $mostFrequent . " ";
}




