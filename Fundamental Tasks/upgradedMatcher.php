<?php
$products = explode(" ", readline());
$quantities = array_map('intval', explode(" ", readline()));
$prices = explode(" ", readline());
$input = explode(' ' ,readline());
while ($input[0] != "done") {
    for ($i = 0; $i < count($prices); $i++) {
        if ($input[0] == $products[$i] && $input[1] <= $quantities[$i]) {
           printf("%s x %d costs %.2f\n",$input[0],$input[1],$input[1] * $prices[$i] );
            $quantities[$i] = $quantities[$i] - $input[1];
            break;
        }
        else if($input[0] == $products[$i] && $input[1] > $quantities[$i]){
            echo "We do not have enough $products[$i]". PHP_EOL;
            break;
        }
    }
    $input = explode(' ' ,readline());
}