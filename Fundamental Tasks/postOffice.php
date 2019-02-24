<?php
$input = explode("|", readline());
$partOne = $input[0];
$partTwo = $input[1];
$partThree = $input[2];
$capitals = preg_match('/([#$%*&])(?<capitals>[A-Z]+)(\1)/', $partOne, $match);
$capitals = $match["capitals"];
for ($i = 0; $i < strlen($capitals); $i++) {
    $letter = $capitals[$i];
    $letterASCII = ord($letter);
    $second = preg_match("/{$letterASCII}:(?<length>[0-9][0-9])/", $partTwo, $match);
    $length = $match["length"];
    $third = preg_match("/(?<=\s|^){$letter}[^\s]{{$length}}(?=\s|$)/m", $partThree, $match);
    echo $match[0].PHP_EOL;
}