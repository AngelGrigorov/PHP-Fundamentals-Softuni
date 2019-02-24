<?php
$input = round(readline());
$coins = 0.0;
$itemPrice = 0.0;
while($input != "Start") {
    if($input == "0.1" || $input == "0.2" || $input == "0.5" || $input == "0.8" || $input == "1.0") {
        $coins += $input;
    } else {
        echo "Cannot accept $input" . PHP_EOL;
    }
    $input = readline();
}
$newinput = strtolower(readline());
while($newinput != "end") {
    switch($newinput) {
        case "nuts": $itemPrice = 2.0; break;
        case "water": $itemPrice = 0.7; break;
        case "crisps": $itemPrice = 1.5; break;
        case "soda": $itemPrice = 0.8; break;
        case "coke": $itemPrice = 1.0; break;
        default: echo "Invalid product" . PHP_EOL; break;
    }
    if($itemPrice > $coins) {
        echo "Sorry, not enough money" . PHP_EOL;
    } else if($newinput == "nuts" || $newinput == "water" || $newinput == "crisps" || $newinput == "soda" || $newinput == "coke") {
        echo "Purchased $newinput" . PHP_EOL;
        $coins -= $itemPrice;
    }
    $newinput = strtolower(readline());
}
printf("Change: %.2f", floor($coins));