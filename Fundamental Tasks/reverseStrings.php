<?php
$word = readline();
while($word != "end"){
    $reversed = strrev($word);
    echo $word." = ".$reversed . PHP_EOL;


    $word = readline();
}