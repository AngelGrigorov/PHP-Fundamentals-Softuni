<?php
$n = intval(readline());
$array = [];
for($i = 0;$i < $n;$i++){
    $command = explode(" ",readline());
    if($command[0] == "register"){
        if(!isset($array[$command[1]])){
            $array[$command[1]] = $command[2];
            echo "$command[1] registered $command[2] successfully".PHP_EOL;
        }else{
            echo "ERROR: already registered with plate number " . $command[2].PHP_EOL;
        }
    }else{
        if(!key_exists($command[1],$array)){
            echo "ERROR: user $command[1] not found".PHP_EOL;
        }else{
           echo "$command[1] unregistered successfully".PHP_EOL;
           unset($array[$command[1]]);
        }
    }
}

foreach($array as $users => $numbers){
    echo $users . " => ".$numbers.PHP_EOL;
}