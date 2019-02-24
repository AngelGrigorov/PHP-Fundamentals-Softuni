<?php
$pairs = intval(readline());
$array = [];

for($i=0;$i<$pairs;$i++){
    $name = readline();
    $grade = floatval(readline());
        $array[$name][] = $grade;
}
uksort($array,function($key1,$key2) use($array){
    $avr1 = array_sum($array[$key1]) / count($array[$key1]);
    $avr2 = array_sum($array[$key2]) / count($array[$key2]);

    return $avr2 <=> $avr1;
});


foreach ($array as $key => $value){
    $avr = array_sum($value) / count($value);
    $avr = number_format($avr,2,".","");
    if($avr >= 4.50){
        echo "$key -> $avr" . PHP_EOL;
    }
}
