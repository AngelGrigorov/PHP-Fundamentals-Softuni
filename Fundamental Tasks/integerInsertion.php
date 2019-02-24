<?php
$array = explode(" ",readline());
$string = readline();
while($string != "end"){
    $pos = $string[0];
    array_splice($array, $pos, 0, intval($string));
    $string = readline();
}
echo implode(' ',$array);