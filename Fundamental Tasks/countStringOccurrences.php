<?php
$text = preg_split("/[ ,.?!]/",readline(),null,PREG_SPLIT_NO_EMPTY);
$word = readline();
$counter = 0;
for($i=0;$i<count($text);$i++){
    if($word == $text[$i]){
        $counter++;
    }
}
echo $counter;