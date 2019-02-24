<?php
function dataType($type,$input){
    if($type == "int"){
        return $input *2;
    }
    else if($type == "real"){
        $result = $input * 1.5;
        return number_format($result,2,'.',"");
    }else{
        $result = "$".$input."$";
        return $result;
    }
}
$type = readline();
$input = readline();
echo dataType($type,$input);