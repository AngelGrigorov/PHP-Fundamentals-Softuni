<?php
$health = 100;
$coins = 0;
$rooms = explode("|",readline());
$countRooms = 0;
for($i = 0;$i < count($rooms);$i++){
    $currRoom = explode(" ",$rooms[$i]);
        switch($currRoom[0]){
            case "potion" :
                $countRooms++;
                if($health + $currRoom[1] > 100){
                    $gained = 100 - $health;
                    $health = 100;
                    echo "You healed for $gained hp." . PHP_EOL;
                    echo "Current health: $health hp." . PHP_EOL;
                }else{
                    $health += $currRoom[1];
                    echo "You healed for $currRoom[1] hp." . PHP_EOL;
                    echo "Current health: $health hp." . PHP_EOL;
                }
                break;
            case "chest" :
                $countRooms++;
                $coins += $currRoom[1];
                echo "You found $currRoom[1] coins." . PHP_EOL;
                break;
            default :
                $countRooms++;
                $health -= $currRoom[1];
                if($health > 0){
                    echo "You slayed $currRoom[0]." . PHP_EOL;
                }else{
                    echo "You died! Killed by $currRoom[0]." . PHP_EOL;
                    echo "Best room: $countRooms";
                    return;
                }
        }

}
echo "You've made it!" . PHP_EOL;
echo "Coins: $coins" . PHP_EOL;
echo "Health: $health" . PHP_EOL;