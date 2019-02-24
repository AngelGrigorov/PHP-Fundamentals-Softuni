<?php
$input = array_map("strtolower",explode(" ",readline()));
$array = [];
for($i = 0;$i < count($input);$i++){
    $word = $input[$i];
    if(!key_exists($word,$array)){
        $array[$word] = 1;
    }else{
        $array[$word]++;
    }
}
$final = [];
foreach($array as $key => $value){
    if($value % 2 !== 0){
        $final[] = $key;
    }
}
echo implode(' ',$final);