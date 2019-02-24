<?php
$string = strtolower(readline());
function vowelsCounting($a){
    return substr_count($a, 'a')
        +substr_count($a, 'e')
        +substr_count($a, 'i')
        +substr_count($a, 'o')
        +substr_count($a, 'u');
}
$counted = vowelsCounting($string);
echo $counted;