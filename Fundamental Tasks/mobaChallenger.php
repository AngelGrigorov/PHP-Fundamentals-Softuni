<?php
$pool = [];
while(true) {
    $input = readline();
    if($input == "Season end") {
        break;
    }
    if(strpos($input, "->") !== false) {
        $input = explode(" -> ", $input);
        $player = $input[0];
        $position = $input[1];
        $skill = intval($input[2]);
        if(key_exists($player, $pool)) {
            if(key_exists($position, $pool[$player])) {
                if($pool[$player][$position] < $skill) {
                    $pool[$player][$position] = $skill;
                }
            } else {
                $pool[$player][$position] = $skill;
            }
        } else {
            $pool[$player][$position] = $skill;
        }
    } else {
        $input = explode(" vs ", $input);
        $playerOne = $input[0];
        $playerTwo = $input[1];
        $remove = "";
        if(key_exists($playerOne, $pool) && key_exists($playerTwo, $pool)) {
            foreach($pool[$playerOne] as $pos => $value) {
                foreach($pool[$playerTwo] as $pol => $skill) {
                    if($pos == $pol) {
                        if(array_sum($pool[$playerOne]) > array_sum($pool[$playerTwo])) {
                            $remove = $playerTwo;
                        } else if(array_sum($pool[$playerOne]) < array_sum($pool[$playerTwo])) {
                            $remove = $playerOne;
                        }
                    }
                }
            }
            unset($pool[$remove]);
        }
    }
}
//Sort
foreach($pool as $pl => $val) {
    $p[] = $pl;
    $sum[] = array_sum($val);
}
array_multisort($sum, SORT_DESC, $p, SORT_ASC, $pool);
//
foreach($pool as $players => $values) {
    echo "$players: " . array_sum($values) . " skill" . PHP_EOL;
    array_multisort($values, SORT_NUMERIC, SORT_DESC, $values, SORT_STRING, SORT_DESC, $values);
    foreach($values as $position => $skill) {
        echo "- $position <::> $skill" . PHP_EOL;
    }
}