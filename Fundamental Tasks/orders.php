<?php
$food = strtolower(readline());
$quantity = readline();
function calculate($food,$quantity){
    switch($food){
        case "coffee" :
            return $quantity * 1.50;
            break;
        case "coke" :
            return $quantity * 1.40;
            break;
        case "water" :
            return $quantity * 1.00;
            break;
        default :
            return $quantity * 2.00;
            break;
    }
}
$price = calculate($food,$quantity);
printf("%.2f", $price);