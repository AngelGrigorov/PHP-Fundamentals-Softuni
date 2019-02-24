<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 11/2/2018
 * Time: 10:44 PM
 */
$first = explode(" ", readline());
$second = explode(" ", readline());
$newArray = [];
$diff = 0;
$parameter = [];
$result = [];
if (count($first) > count($second)) {
    for ($i = 0; $i < count($second); $i++) {
        $newArray[] = $first[$i];
        $newArray[] = $second[count($second) - 1 - $i];
    }
    $diff = count($first) - count($second);
    for ($j = 0; $j < $diff; $j++) {
        $parameter[] = array_pop($first);
    }
} else {
    for ($i = 0; $i < count($first); $i++) {
        $newArray[] = $first[$i];
        $newArray[] = $second[count($second) - 1 - $i];

    }
    $diff = count($second) - count($first);
    for ($j = 0; $j < $diff; $j++) {
        $parameter[] = $second[$j];
    }
}
sort($parameter);
for ($k = 0; $k < count($newArray); $k++) {
    if ($newArray[$k] > $parameter[0]  && $newArray[$k] < $parameter[1] ) {
        $result[] = $newArray[$k];
    }
}
sort($result);
echo implode(" ", $result);
