<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 12/16/2018
 * Time: 9:07 AM
 */
$input = readline();
$bandsNames = [];
$bandsTimes = [];
while($input != "start of concert"){
    list($command,$band,$players) = explode("; ",$input);
    if($command == "Add"){
        $players = explode(", ",$players);
if(!key_exists($band,$bandsNames)){
    $bandsNames[$band] = [];
    $bandsTimes[$band] = [];
    $bandsTimes[$band]['Time'] = 0;
    foreach($players as $player){
        array_push($bandsNames[$band],$player);
    }
}else{
    foreach($players as $player){
        if(!in_array($player,$bandsNames[$band])){
            array_push($bandsNames[$band],$player);
        }
    }
}
    }else{
if(!key_exists($band,$bandsTimes) && !key_exists($band,$bandsNames)){
    $bandsNames[$band] = [];
    $bandsTimes[$band] = [];
    $bandsTimes[$band]['Time'] = 0;
}
        $bandsTimes[$band]['Time'] += $players;

    }

    $input = readline();
}
uksort($bandsTimes,function ($key1,$key2) use($bandsTimes){
   $time1 = $bandsTimes[$key1];
   $time2 = $bandsTimes[$key2];
   if($time1 == $time2){
       return $key1 <=> $key2;
   }
   return $time2 <=> $time1;
});
$bandName = readline();
$total = 0;
foreach ($bandsTimes as $key){
    $total += $key['Time'];
}
echo "Total time: $total" . PHP_EOL;
foreach($bandsTimes as $key => $value){
    echo $key . " -> " . implode(PHP_EOL,$value) .PHP_EOL;
}
echo $bandName . PHP_EOL;
foreach ($bandsNames[$bandName] as $key){
    echo "=> " . $key . PHP_EOL;
}