<?php
$array = explode(" ", readline());
$collected = $array[0];
$index = $array[0];
$position = 0;
while (true) {
    if ($position + $index < count($array)) {
        $position += $index;
    } else if ($position - $index >= 0) {
        $position -= $index;
    } else {
        break;
    }
    $collected += $array[$position];
    $index = $array[$position];
}
echo $collected;