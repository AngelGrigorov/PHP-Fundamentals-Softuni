<?php
$input = readline();
$allSides = [];
while ($input != "Lumpawaroo") {
    if (strstr($input, '|')) {
        list($side,$user) = explode(" | ", $input);
        if (!key_exists($user,$allSides)) {
            $allSides[$side] = [];

        }
        $exist = false;
        foreach($allSides as $usersArray){
            if(in_array($user,$usersArray)){
                $exist = true;
                break;
            }
        }
        if(!$exist){
            $allSides[$side][] = $user;
        }
    }else {
        list($user,$side) = explode(" -> ", $input);

        if (!key_exists($side, $allSides)) {
            $allSides[$side] = [];
        }
        foreach ($allSides as $innerSide => $usersArray) {
            $index = array_search($user, $allSides[$innerSide]);
            if ($index !== false) {
                array_splice($allSides[$innerSide], $index, 1);
                break;
            }
        }
        $allSides[$side][] = $user;
        echo "$user joins the $side side!" . PHP_EOL;
    }
    $input = readline();

}
uksort($allSides, function($key1,$key2) use ($allSides){
   $value1 = $allSides[$key1];
   $value2 = $allSides[$key2];
   $count1 = count($value1);
   $count2 = count($value2);
   if($count1 === $count2){
       return $key1 <=> $key2;
   }
   return $count2 <=> $count1;
}
);
foreach($allSides as $side => $usersArray){
    if(count($usersArray) === 0) continue;
    echo "Side: $side, Members: " . count($usersArray) . PHP_EOL;
    sort($usersArray);
    foreach($usersArray as $user){
        echo "! $user" . PHP_EOL;
    }
}
