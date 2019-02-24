<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 11/3/2018
 * Time: 12:10 AM
 */
$text = readline();
$letters = [];
for($i = 0;$i < strlen($text);$i++){
    $char = $text[$i];
    if(!key_exists($char,$letters)){
        $letters[$char] = 1;
    }else{
        $letters[$char]++;

    }
}

foreach ($letters as $k => $v) {
    echo "$k -> $v" . PHP_EOL;
}