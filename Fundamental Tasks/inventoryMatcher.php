<?php
$products = explode(" ", readline());
$quantities = array_map('intval', explode(" ", readline()));
$prices = explode(" ", readline());
$input = readline();
while ($input != "done") {
    for ($i = 0; $i < count($quantities); $i++) {
        if ($input == $products[$i]) {
            echo "$input costs: $prices[$i]; Available quantity: $quantities[$i]" . PHP_EOL;
        }
    }
    $input = readline();
}