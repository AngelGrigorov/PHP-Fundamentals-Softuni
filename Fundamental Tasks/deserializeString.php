<?php
$input = readline();
$array = [];
while($input != "end"){
    list($letter,$indexes) = explode(":",$input);
    $indexes = explode("/",$indexes);
    for($i=0;$i<count($indexes);$i++){
        if(!key_exists($indexes[$i],$array)){
            $array[$indexes[$i]] = $letter;
        }
    }
    $input = readline();
}
ksort($array);
foreach($array as $key => $value){
    echo $value;
}