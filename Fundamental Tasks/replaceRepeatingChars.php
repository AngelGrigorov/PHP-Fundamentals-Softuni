<?php
$input = readline();
$newLine = [];
for($i=0;$i < strlen($input);$i++){

    if($input[$i] == $input[$i+1]){
        continue;
    }else{
        $newLine[] = $input[$i];

    }
}
echo implode("",$newLine);