<?php
$array = array_map('intval',explode(" ", readline()));
$finishLine = floor(count($array) / 2);
$sum1 = 0.0;
$sum2 = 0.0;
for ($i = 0; $i < count($array); $i++) {
    if ($i < $finishLine) {
        @$sum1 += $array[$i];
        if ($array[$i] == 0) {
            @$sum1 *= 0.8;
        }
    }
    if ($i > $finishLine) {
        @$sum2 += $array[$i];
        if ($array[$i] == 0) {
            @$sum2 *= 0.8;
        }
    }
}

if ($sum2 >= $sum1) {
    echo "The winner is left with total time: $sum1";

} else {
    echo "The winner is right with total time: $sum2";

}