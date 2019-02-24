<?php
$pokemons = explode(" ", readline());
$sum = 0;
$count = 0;
while (count($pokemons) > 0) {
    $index = intval(readline());
    $power = PHP_INT_MIN;
        if ($index < 0) {
            $power = $pokemons[0];
            $pokemons[0] = $pokemons[count($pokemons) - 1];

        } else if ($index > count($pokemons) - 1) {
            $power = $pokemons[count($pokemons) - 1];
            $pokemons[count($pokemons) - 1] = $pokemons[0];

        }else {
            $power = $pokemons[$index];
            unset($pokemons[$index]);
            $pokemons = array_values($pokemons);
        }

    $sum += $power;
        for ($i = 0; $i < count($pokemons); $i++) {
            if($pokemons[$i] > $power) {
                $pokemons[$i] -= $power;
            }else if($pokemons[$i] <= $power){
                $pokemons[$i] += $power;

            }
        }
}
echo $sum;



