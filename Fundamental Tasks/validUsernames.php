<?php
$input = explode(", ", readline());
$pattern = '/[a-zA-Z0-9_-]+/';

foreach ($input as $words) {

    if (strlen($words) > 2 and strlen($words) < 17) {
     $filter = preg_filter($pattern, $words, $words);
         if($filter != $words){
             continue;
        } else {
            echo $words . PHP_EOL;
        }
    }
}


