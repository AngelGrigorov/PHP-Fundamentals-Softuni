<?php
$array = [];
$command = readline();
while($command != "Print"){
    $command = explode(" ",$command);
    if($command[0] == "Push"){
        array_splice($array,0,0,$command[1]);
    }else if($command[0] == "Add"){
        array_push($array,$command[1]);
    }else if($command[0] == "Pop"){
        array_splice($array,0,1);
    }else if($command[0] == "Enqueue"){
        array_pop($array);
    }

    $command = readline();
}
echo implode(' ',$array);