<?php
$array = explode(" ", readline());
$command = readline();
while($command != "end"){
    $command = explode(" ",$command);
if($command[0] == "Add"){
    $array[] = $command[1];
}else if($command[0] == "Remove"){
    $index = array_search($command[1],$array);
    unset($array[$index]);
}else if($command[0] == "RemoveAt"){
    array_splice($array,$command[1],1);
}else if($command[0] == "Insert"){
    array_splice($array,$command[2],0,$command[1]);
}else if($command[0] == "Contains"){
    if(in_array($command[1],$array)){
        echo "Yes" . PHP_EOL;
    }else{
        echo "No such number" . PHP_EOL;
    }
}else if($command[0] == "Print") {
    if ($command[1] == "even") {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] % 2 == 0) {
                echo $array[$i] . " ";
            }
        }
        echo PHP_EOL;
    } else {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] % 2 == 1) {
                echo $array[$i] . " ";
            }

        }
        echo PHP_EOL;
    }
}else if($command[0] == "Filter"){
    if($command[1] == "<"){
        for($i = 0;$i<count($array);$i++){
            if($array[$i] < $command[2]){
                echo $array[$i] . " ";
            }
        }
        echo PHP_EOL;
    }elseif($command[1] == ">"){
        for($i = 0;$i<count($array);$i++){
            if($array[$i] > $command[2]){
                echo $array[$i] . " ";
            }
        }
        echo PHP_EOL;
    }else if($command[1] == ">="){
        for($i = 0;$i<count($array);$i++){
            if($array[$i] >= $command[2]){
                echo $array[$i] . " ";
            }
        }
        echo PHP_EOL;
    }else {
        for($i = 0;$i<count($array);$i++){
            if($array[$i] <= $command[2]){
                echo $array[$i] . " ";
            }
        }
        echo PHP_EOL;
    }

}
else if($command[0] == "Get"){
    echo array_sum($array) . PHP_EOL;
}
    $command = readline();
}
echo implode(" ",$array);