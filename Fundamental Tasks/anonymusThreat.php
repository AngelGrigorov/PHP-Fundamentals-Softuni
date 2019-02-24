<?php
$data = explode(' ', readline());

while (true) {
    $input = readline();
    if ($input === '3:1') {
        break;
    }
    $len = count($data);
    $line = explode(' ', $input);
    $command = $line[0];
    $result = '';

    if ($command === 'merge') {
        $start = intval($line[1]);
        $end = intval($line[2]);
        if ($start < 0) {
            $start = 0;
        }

        if ($start > count($data)-1) {
            continue;
        }

        if ($end > count($data) - 1) {
            $end = count($data) - 1;
        }


        if($end < 0){
            continue;
        }

        for ($i = $start; $i <= $end; $i++) {
            $result .= $data[$i];
        }

        array_splice($data, $start, $end-$start+1);
        array_splice($data, $start, 0, $result);
    }

    elseif ($command === 'divide'){
        $index = intval($line[1]);
        $parts = intval($line[2]);
        $element = $data[$index];
        $elementLen = strlen($data[$index]);
        $partsLen = intval($elementLen / $parts);
        $result = [];
        if($elementLen % $parts === 0){
            $result = str_split($element, $partsLen);
        } else {
            $lastPartsLen = $partsLen + $elementLen % $parts;
            $lastPart = substr($element, (-$lastPartsLen));
            $element = substr_replace($element, "", (-$lastPartsLen));
            $result = str_split($element, $partsLen);
            $result[] = $lastPart;
        }
        array_splice($data, $index, 1);
        array_splice($data, $index, 0, $result);
    }
}

echo implode(' ', $data);
