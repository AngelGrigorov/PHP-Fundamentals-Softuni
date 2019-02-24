<?php
$regex = '/\b(?<dates>\d{2})([-.\/])(?<months>[A-Z][a-z]{2})\2(?<years>\d{4})\b/';
$str = readline();
preg_match_all($regex,$str,$matches);

for($i=0;$i<count($matches['dates']);$i++){
    echo "Day: " . $matches['dates'][$i] . ", "
        . "Month: " . $matches['months'][$i] . ", "
        . "Year: " . $matches['years'][$i] . PHP_EOL;
}