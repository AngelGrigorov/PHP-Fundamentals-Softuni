<?php
$energy = 100;
$coins = 100;

$command = readline();
$array = explode("|", $command);
for ($i = 0; $i < count($array); $i++) {
    $newArray = explode("-", $array[$i]);
    if($newArray[0] == "rest") {

        if (($energy + $newArray[1]) > 100) {
            $gained = 100 - $energy;
            $energy = 100;
            echo "You gained $gained energy." . PHP_EOL;
            echo "Current energy: $energy" . "." . PHP_EOL;

        } else {
            @$energy += $newArray[1];
            echo "You gained $newArray[1] energy." . PHP_EOL;
            echo "Current energy: $energy" . "." . PHP_EOL;

        }
    }else if($newArray[0] == "order") {

        if ($energy - 30 <= 0) {

            echo "You had to rest!" . PHP_EOL;
            @$energy += 50;

        } else {
            @$energy -= 30;
            @$coins += $newArray[1];
            echo "You earned $newArray[1] coins." . PHP_EOL;

        }
    }
      else{

            if (($coins - $newArray[1]) <= 0) {
                echo "Closed! Cannot afford $newArray[0]" . "." . PHP_EOL;
                die;
            } else {
                @$coins -= $newArray[1];
                echo "You bought $newArray[0]" . "." . PHP_EOL;
            }
    }

}

echo "Day completed!" . PHP_EOL;
echo "Coins: $coins" . PHP_EOL;
echo "Energy: $energy" . PHP_EOL;
