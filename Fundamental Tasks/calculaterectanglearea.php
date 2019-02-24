<?php
$width = readline();
$length = readline();
function area($a,$b){
    $area = $a * $b;
    return $area;
}
$area = area($width, $length);
echo $area;