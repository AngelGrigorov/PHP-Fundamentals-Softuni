<?php
$input = readline();
function reverse($a){
if(strrev($a) === $a){
    return "true";
}else{
    return "false";
}
}
while($input != "END"){

    $action = reverse($input);
    echo $action . PHP_EOL;


    $input = readline();

}