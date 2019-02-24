<?php
$array = explode(" ", readline());
$command = readline();
while ($command != "End") {
    $command = explode(" ", $command);
    if ($command[0] == "Add") {
        $array[] = $command[1];
    } else if ($command[0] == "Remove") {
        if ($command[1] < count($array) && $command[1] >= 0) {
            unset($array[intval($command[1])]);
            $array = array_values($array);
        } else {
            echo "Invalid index" . PHP_EOL;
        }
    } else if ($command[0] == "Insert") {
        if ($command[2] < count($array) && $command[2] >= 0) {
            array_splice($array, $command[2], 0, $command[1]);
        } else {
            echo "Invalid index" . PHP_EOL;
        }
    } else if ($command[0] == "Shift") {
        $array = shifting($array, $command[1], $command[2]);
    }
    $command = readline();
}
echo implode(" ", $array);

function shifting($array, $direction, $n) {
    if ($direction == "left") {
        for ($i = 0; $i < $n; $i++) {
            $array[] = $array[$i];
            unset($array[$i]);
        }
        $array = array_values($array);
        return $array;
    } else {
        for ($i = 0; $i < $n; $i++) {
            array_unshift($array, $array[count($array) - 1]);
            unset($array[count($array) - 1]);
        }
        $array = array_values($array);
        return $array;
    }
}