<?php
$input = readline();
$towns = [];
while($input != "Slide rule"){
    list($town,$command,$passengers) = preg_split("/[:->]+/", $input);
    $command = str_replace("-","",$command);
if(is_numeric($command)){
    if(!key_exists($town,$towns)){
        $towns[$town]["bestTime"] = $command;
        $towns[$town]["passengers"] = $passengers;
    }else{
        $towns[$town]["passengers"] += $passengers;
if($command < $towns[$town]["bestTime"]){
    $towns[$town]["bestTime"] = $command;

}else if($towns[$town]["bestTime"] == 0){
    $towns[$town]["bestTime"] = $command;
}
    }
}else{
    if(key_exists($town,$towns)){
        $towns[$town]["bestTime"] = 0;
        $towns[$town]["passengers"] -= $passengers;
    }
}


    $input = readline();
}
uksort($towns,function($key1,$key2) use($towns){
    $time1 = $towns[$key1]["bestTime"];
    $time2 = $towns[$key2]["bestTime"];
    $name1 = $key1;
    $name2 = $key2;
    if($time1 == $time2){
      return  $name1 <=> $name2 ;
    }
    return $time1 <=>$time2;

});
foreach($towns as $town => $value){
$temp = implode(" ",$value);
list($time,$pass) = explode(" ",$temp);
if($time == 0 || $pass <= 0){
    continue;
}else{
    echo"$town -> Time: " . implode(" -> Passengers: ",$value) . PHP_EOL;

}


}
