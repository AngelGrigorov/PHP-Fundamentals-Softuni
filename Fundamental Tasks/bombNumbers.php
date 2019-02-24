<?php
function bombing($array,$specialBombNumber,$power){
    for($i = 0;$i < count($array);$i++){
        if($array[$i] == $specialBombNumber) {

            for ($j = 0; $j <= $power; $j++) {
                unset($array[$i - $j]);
                unset($array[$i + $j]);
            }
            $array[$i] = 0;
        }
    }
    return $array;
}
$array = explode(" ",readline());
$powers = array_map('intval',explode(" ",readline()));
$specialBombNumber = $powers[0];
$power = $powers[1];

    echo array_sum(bombing($array, $specialBombNumber, $power));
