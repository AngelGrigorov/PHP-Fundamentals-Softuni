<?php
$input = explode(", ", readline());
for ($i = 0; $i < count($input); $i++) {
    if ($input[$i] == "") {
        unset($input[$i]);
    }
}
for($j = 0;$j <count($input);$j++){
    if(strlen($input[$j]) != 20){
        echo "invalid ticket" . PHP_EOL;
    }
}