<?php
$input = explode("\\",readline());
$result = explode(".",$input[count($input)-1]);
if(count($result) > 2){
    $name = [];
    for($i=0;$i<count($result)-1;$i++){
        $name[]= $result[$i];
    }
    $newName = implode(".",$name);
    echo "File name: " . $newName . PHP_EOL;

    echo "File extension: " . $result[count($result)-1] . PHP_EOL;
}else{
    echo "File name: " . $result[0] . PHP_EOL;

    echo "File extension: " . $result[1] . PHP_EOL;
}

