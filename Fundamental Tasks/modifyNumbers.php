<?php
$array = array_map('intval',explode(" ",readline()));
$command = readline();
while($command != "end"){
    $command = explode(" ",$command);
    if($command[0] == "swap"){
        $temp = $array[$command[1]];
        $array[$command[1]] = $array[$command[2]];
        $array[$command[2]] = $temp;
    }else if($command[0] == "multiply"){
        $array[$command[1]] *= $array[$command[2]];
    }else if($command[0] == "decrease"){
        for($i = 0;$i < count($array);$i++){
            $array[$i] -= $command[1];
        }
    }else if($command[0] == "increase"){
        for($i = 0;$i < count($array);$i++){
            $array[$i] += $command[1];
        }
    }else if($command[0] == "remove"){
        unset($array[$command[1]]);
        $array = array_values($array);
    }
    $command = readline();
}
echo implode(", ",$array);