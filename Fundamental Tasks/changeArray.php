<?php
$array = array_map('intval', explode(" ", readline()));
$command = readline();
while(true){
    $command = explode(" ",$command);
    if($command[0] == "Delete"){
        for($i = 0;$i < count($array);$i++){
            if($array[$i] == $command[1]){
                $index = array_search($command[1],$array);
                unset($array[$index]);
            }
        }
    }else if($command[0] == "Insert"){
        array_splice($array,$command[2],0,$command[1]);
    }else if($command[0] == "Odd"){
        for($i = 0;$i < count($array);$i++){
            if($array[$i] % 2 != 0){
               $newArray[] = $array[$i];

            }

        }
        echo implode(" ",$newArray);
        return;
    }else if($command[0] == "Even"){
        for($i = 0;$i < count($array);$i++){
            if($array[$i] % 2 == 0){
                $newArray[] = $array[$i];
            }

        }
        echo implode(" ",$newArray);

        return;
    }


    $command = readline();
}
