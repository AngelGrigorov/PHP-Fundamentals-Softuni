<?php
$lines = readline();
$results = [];
$submissions=[];
while($lines != "exam finished"){
    $command = explode("-",$lines);
    $user = $command[0];
    $language = $command[1];
    if($language !== "banned"){
        $points = $command[2];
    }else{
        unset($results[$user]);
        $lines = readline();
        continue;
    }
    if(!key_exists($user,$results)){
        $results[$user] = $points;
    }else{
        if($results[$user] < $points)
        {
            $results[$user] = $points;
        }
    }
    if(!key_exists($language,$submissions)){
        $submissions[$language] = 1;
    }else{
        $submissions[$language]++;
    }

    $lines = readline();
}
uksort($results,function ($key1,$key2) use($results){
    $points1 = $results[$key1];
    $points2 = $results[$key2];
    $dif = $points1 <=> $points2;
    if($dif === 0){
      return  $key1 <=> $key2;
    }
    return $points2<=>$points1;
});
uksort($submissions,function ($key1,$key2) use($submissions){
    $count1 = $submissions[$key1];
    $count2 = $submissions[$key2];
    $dif = $count1 <=> $count2;
    if($dif === 0){
        return  $key1 <=> $key2;
    }
    return $count2<=>$count1;
});
echo "Results:" . PHP_EOL;
foreach($results as $user => $points){
    echo "$user | $points" . PHP_EOL;
}
echo "Submissions:" . PHP_EOL;
foreach($submissions as $lang => $count){
    echo "$lang - $count" . PHP_EOL;
}