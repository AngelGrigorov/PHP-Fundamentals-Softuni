<?php
$input = array_map('intval',explode(" ", readline()));

for($i = 0;$i < intval(count($input)/2);$i++){
    $first = $input[$i];
    $last = $input[count($input)-1 - $i];
echo $first + $last . " ";

}
if(count($input) % 2 == 1){
    echo $input[count($input)/2];
}