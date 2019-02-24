<?php
$input = array_map('floatval',explode(" ", readline()));
for($i = 0;$i < count($input);$i++){
    if($input[$i] == $input[$i + 1]){
        $sum = $input[$i] + $input[$i + 1];
        array_splice($input,$i,2,$sum);
        $i = -1;
    }
}
echo implode(' ',$input);