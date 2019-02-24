<?php
$input = readline();
$regex = '/(?<dishes><[a-z0-9]+>)|(?<house>\[[A-Z0-9]+\])|(?<laundry>\{.+\})/m';
$numRegex = '/\d/';
$timeDishes = 0;
$timeCleaning = 0;
$timeLaundry = 0;
while($input != "wife is happy"){
    preg_match_all($regex, $input, $matches);
preg_match_all($numRegex,$matches[0][0],$numbers);
if($matches['dishes'][0] != ""){
    $timeDishes += array_sum($numbers[0]);
}else if($matches['house'][0] != ""){
    $timeCleaning += array_sum($numbers[0]);
    }else if($matches['laundry'][0] != ""){
    $timeLaundry += array_sum($numbers[0]);
    }
    $input = readline();
}
$total = $timeDishes + $timeCleaning + $timeLaundry;
echo "Doing the dishes - $timeDishes min." . PHP_EOL;
echo "Cleaning the house - $timeCleaning min." . PHP_EOL;
echo "Doing the laundry - $timeLaundry min." . PHP_EOL;
echo "Total - $total min.";
