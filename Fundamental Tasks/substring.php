<?php
$word = readline();
$text = readline();
while(1){
    $old = $text;
    $text = str_replace($word,"",$text);
    if($old == $text){
        echo $text;
        break;
    }
}