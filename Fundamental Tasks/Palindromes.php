<?php
$text = preg_split("/[ ,.?!]/",readline(),null,PREG_SPLIT_NO_EMPTY);
$palindromes = [];
for($i=0;$i<count($text);$i++){
    $reversed = strrev($text[$i]);
    if($reversed == $text[$i]){
        array_push($palindromes,$text[$i]);
    }
}
$palindromes = array_unique($palindromes);
natcasesort($palindromes);
echo implode(', ',$palindromes);