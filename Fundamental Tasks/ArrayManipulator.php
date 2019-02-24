<?php
$array = array_map("intval", explode(" ", readline()));
$input = readline();

while (true) {
    $token = explode(" ", $input);
    $command = $token[0];
    if ($command === "end") {
        break;
    }
    switch ($command) {
        case"exchange":
            $index = intval($token[1]);
            $length = count($array);
            if ($index >= $length || $index < 0) {
                echo "Invalid index" . PHP_EOL;
            } else {
                $array = exchange($array, $index);
            }
            break;
        case "max":
            $type = $token[1];
            printMax($array, $type);
            break;
        case "min":
            $type = $token[1];
            printMin($array, $type);
            break;
        case "first":
            $count = intval($token[1]);
            $type = $token[2];
            if ($count > count($array)) {
                echo "Invalid count" . PHP_EOL;
            } else {
                printFirstType($array, $count, $type);
            }
            break;
        case "last":
            $count = intval($token[1]);
            $type = $token[2];
            if ($count > count($array)) {
                echo "Invalid count" . PHP_EOL;
            } else {
                printLastType($array, $count, $type);
            }
            break;

    }


    $input = readline();
}
echo "[" . implode(", ", $array) . "]";

function exchange($arr, int $index)
{
    $newArr = [];
    $length = count($arr);
    for ($i = $index + 1; $i < $length; $i++) {
        $newArr[] = $arr[$i];
    }
    for ($i = 0; $i <= $index; $i++) {
        $newArr[] = $arr[$i];
    }
    return $newArr;
}

function printMax($array, string $type)
{
    $length = count($array);
    $index = -1;
    $max = PHP_INT_MIN;
    if ($type == "even") {
        for ($i = 0; $i < $length; $i++) {
            if ($array[$i] % 2 == 0) {
                if ($array[$i] >= $max) {
                    $index = $i;
                    $max = $array[$i];
                }
            }
        }
    }
    if ($type == "odd") {
        for ($i = 0; $i < $length; $i++) {
            if ($array[$i] % 2 == 1) {
                if ($array[$i] >= $max) {
                    $index = $i;
                    $max = $array[$i];
                }
            }
        }
    }
    if ($index === -1) {
        echo "No matches" . PHP_EOL;
    } else {
        echo $index . PHP_EOL;
    }

}

function printMin($array, string $type)
{
    $length = count($array);
    $index = -1;
    $min = PHP_INT_MAX;
    if ($type == "even") {
        for ($i = 0; $i < $length; $i++) {
            if ($array[$i] % 2 == 0) {
                if ($array[$i] <= $min) {
                    $index = $i;
                    $min = $array[$i];
                }
            }
        }
    }
    if ($type == "odd") {
        for ($i = 0; $i < $length; $i++) {
            if ($array[$i] % 2 == 1) {
                if ($array[$i] <= $min) {
                    $index = $i;
                    $min = $array[$i];
                }
            }
        }
    }
    if ($index === -1) {
        echo "No matches" . PHP_EOL;
    } else {
        echo $index . PHP_EOL;
    }
}

function printFirstType($array, int $count, $type)
{

    $newArr = [];
    $size = count($array);
    $success = 0;
    if ($type == "even") {
        for ($i = 0; $i < $size; $i++) {
            if ($array[$i] % 2 == 0) {
                if ($success === $count) {
                    break;
                }
                $newArr[] = $array[$i];
                $success++;
            }
        }
    }

    if ($type == "odd") {
        for ($i = 0; $i < $size; $i++) {
            if ($array[$i] % 2 == 1) {
                if ($success === $count) {
                    break;
                }
                $newArr[] = $array[$i];
                $success++;
            }
        }
    }
    if (count($newArr) === 0) {
        echo "[]" . PHP_EOL;
    } else {
        echo "[" . implode(", ", $newArr) . "]" . PHP_EOL;
    }

}



function printLastType($array, int $count, $type)
{

    $newArr = [];
    $size = count($array);
    $success = 0;
    if ($type == "even") {
        for ($i = $size-1; $i >= 0; $i--) {
            if ($array[$i] % 2 == 0) {
                if ($success === $count) {
                    break;
                }
                $newArr[] = $array[$i];
                $success++;
            }
        }
    }

    if ($type == "odd") {
        for ($i = $size-1; $i >= 0; $i--) {
            if ($array[$i] % 2 == 1) {
                if ($success === $count) {
                    break;
                }
                $newArr[] = $array[$i];
                $success++;
            }
        }
    }
    if (count($newArr) === 0) {
        echo "[]" . PHP_EOL;
    } else {
        echo "[" . implode(", ", array_reverse($newArr)) . "]" . PHP_EOL;
    }
}