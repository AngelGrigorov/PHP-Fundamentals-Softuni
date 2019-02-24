<?php
$path = explode(", ",readline());
$command = readline();
while($command != "Retire!"){
    $command = explode(" - ",$command);
    if($command[0] == "Start"){
        if(!in_array($command[1],$path)) {
            array_push($path, $command[1]);
        }
    }else if($command[0] == "Complete"){
        if(in_array($command[1],$path)){
            $index = array_search($command[1],$path);
            unset($path[$index]);
            $path = array_values($path);
        }
    }else if($command[0] == "Side Quest"){
        $quests = explode(":",$command[1]);
        if(in_array($quests[0],$path)){
            $i = array_search($quests[0],$path);
            if(!in_array($quests[1],$path)){
            array_splice($path,$i+1,0,$quests[1]);
            $path = array_values($path);}
        }
    }else if($command[0] == "Renew"){
        if(in_array($command[1],$path)){
            $i = array_search($command[1],$path);
            array_push($path,$command[1]);
            unset($path[$i]);
            $path = array_values($path);

        }
    }
    $command = readline();
}
echo implode(', ',$path);