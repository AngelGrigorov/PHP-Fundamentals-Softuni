<?php
$n = intval(readline());
function matrix ($n){

    for($i = 0;$i < $n;$i++){

            $line =  str_repeat(($n . " "),($n . " ")).PHP_EOL;
            $matrix .= $line;


    }
    return $matrix;
}
$matrix = matrix($n);
echo $matrix;