<?php
$bannedWords = explode(", ",readline());
$text = readline();
foreach($bannedWords as $words){
    $text = (str_replace($words,str_repeat("*",strlen($words)),$text));

}
echo $text;