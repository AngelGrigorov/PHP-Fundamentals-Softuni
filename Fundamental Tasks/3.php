<?php
$command = readline();
$bestQuality = PHP_INT_MIN;
$bestBread=[];
while($command != "Bake It!"){
    $array = explode("#",$command);
    $quality = array_sum($array);
    if(intval($quality) > $bestQuality){
        $bestQuality = intval($quality);
        $bread = $array;
        $bestBread = implode(" ",$array);
    }
    if(intval($quality) == $bestQuality){
        $bestQuality = intval($quality);
        if(intval($quality/count($array)) > intval($quality/count($bread))){
            $bestBread = implode(" ",$array);
        }else if(intval($quality/count($array)) == intval($quality/count($bread))) {
            $bestBread = implode(" ", $bread);
        }else{
            $bestBread = implode(" ",$bread);
        }
    }
    $command = readline();
}
echo "Best Batch quality: $bestQuality" . PHP_EOL;
echo $bestBread;