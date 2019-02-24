<?php
$cypher = readline();
$line = readline();
for($i=0;$i<strlen($cypher);$i++){
    if(ord($cypher[$i]) == 35 ){
        continue;
    }
    else if(ord($cypher[$i]) > 99 && ord($cypher[$i]) < 126){
        continue;
    }else{
        echo "This is not the book you are looking for.";
        return;
    }
}
for($j = 0;$j<strlen($cypher);$j++){
    $num= ord($cypher[$j]);
    $symbol = chr($num - 3);
    $cypher[$j] = $symbol;
}
list($first, $second) = explode(" ",$line);
$decypered = str_replace($first,$second,$cypher);
echo $decypered;


