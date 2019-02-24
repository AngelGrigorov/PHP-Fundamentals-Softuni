<?php
$arr = [];
$sum = 0;
while(true) {
    $input = explode(": ", readline());
    if($input[0] == "JOKER") {
        break;
    }
    $studentName = $input[0];
    $cards = explode(", ", $input[1]);
    if(!key_exists($studentName, $arr)) {
        $arr[$studentName] = [];
    }
    foreach($cards as $card) {
        array_push($arr[$studentName], $card);
    }
}
// Remove duplicate cards
foreach($arr as $key => $value) {
    $arr[$key] = array_unique($value);
}
//Math
foreach($arr as $student => $cards) {
    $sum = 0;
    foreach($cards as $card) {
        if(strlen($card) > 2) {
            $power = $card[0] . $card[1];
            $type = $card[2];
        } else {
            $power = $card[0];
            $type = $card[1];
        }
        switch($power) {
            case 'J': $power = 11;
                break;
            case 'Q': $power = 12;
                break;
            case 'K': $power = 13;
                break;
            case 'A': $power = 14;
        }
        switch($type) {
            case 'S': $multi = 4;
                break;
            case 'H': $multi = 3;
                break;
            case 'D': $multi = 2;
                break;
            case 'C': $multi = 1;
                break;
        }
        $sum += $power * $multi;
        $arr[$student] = $sum;
    }
}
//Output
foreach($arr as $student => $sum) {
    echo "{$student}: {$sum}" . PHP_EOL;
}