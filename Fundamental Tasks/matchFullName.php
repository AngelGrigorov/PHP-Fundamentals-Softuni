<?php
$pattern = "/\b[A-Z][a-z]+ [A-Z][a-z]+\b/";
$str = readline();
preg_match_all($pattern,$str,$matches);
foreach($matches as $key => $value){
    echo implode(" ",$value);
}