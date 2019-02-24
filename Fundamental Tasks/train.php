<?php
$wagons = array_map('intval', explode(" ", readline()));
$maxCapacity = intval(readline());
$command = readline();
while($command != "end"){
    $command = explode(" ",$command);
    if($command[0] == "Add"){
        $wagons[] = $command[1];
    }else{
        for($i = 0;$i < count($wagons);$i++){
            if($wagons[$i] + $command[0] <= $maxCapacity){
                $wagons[$i] += $command[0];
                break;
            }
        }
    }

    $command = readline();
}
echo implode(' ',$wagons);