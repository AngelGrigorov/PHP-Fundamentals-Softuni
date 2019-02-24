<?php
$input = readline();
$uniqueSymbols = [];
$result = "";
$repeatedString = "";
for($i=0;$i<strlen($input);$i++){

    if(!is_numeric($input[$i])){
        $repeatedString .= strtoupper($input[$i]);

    }else{
        if($input[$i] == 0){
            $repeatedString = "";
            continue;
        }else if(is_numeric($input[$i + 1])){
            if($input[$i] == 1) {
                $firstDigit = 10;
            }else if($input[$i] == 2){
                $firstDigit = 20;

            }
            $newDigit = $firstDigit + $input[$i + 1];
            for($j=0;$j<$newDigit ;$j++){
                $result .= $repeatedString;

            }
            $repeatedString = "";
            $i++;
        }
        else {
            for($j=0;$j<$input[$i];$j++){
                $result .= $repeatedString;

            }
            $repeatedString = "";
        }
    }
}
for($k = 0;$k<strlen($result);$k++) {
    if (!in_array($result[$k], $uniqueSymbols)) {
        $uniqueSymbols[] = $result[$k];
    }
}
echo "Unique symbols used: " . count($uniqueSymbols) . PHP_EOL;
echo $result;
//var_dump($uniqueSymbols);
