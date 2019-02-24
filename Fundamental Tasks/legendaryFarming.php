<?php
$materialArr = [];
$materialArr["shards"] = 0;
$materialArr["fragments"] = 0;
$materialArr["motes"] = 0;

$junk = [];
$get = true;
$winner = "";
while($get) {
    $input = explode(" ", readline());
    for($i = 0; $i < count($input); $i += 2) {
        $qty = $input[$i];
        $material = strtolower($input[$i + 1]);
        if(key_exists($material,$materialArr)) {
            $materialArr[$material] += $qty;
            if($materialArr[$material] >= 250) {
                $winner = $material;
                $materialArr[$material] -= 250;
                $get = false;
                break;
            }
        } else {
            if(!key_exists($material, $junk)) {
                $junk[$material] = 0;
            }
            $junk[$material] += $qty;
        }
    }
}
switch($winner) {
    case 'shards': $winner = "Shadowmourne";
        break;
    case 'fragments': $winner = "Valanyr";
        break;
    case 'motes': $winner = "Dragonwrath";
        break;
}

// uasort($materialArr, function ($val1, $val2) use ($materialArr) {
//     return $val2 <=> $val1;
// });
$mat = [];
$quantity = [];
ksort($junk);
echo "$winner obtained!" . PHP_EOL;
foreach($materialArr as $material => $qty) {
    $mat[] = $material;
    $quantity[] = $qty;
}
array_multisort($quantity, SORT_DESC, $mat, SORT_ASC, $materialArr);
foreach($materialArr as $material => $qty) {
    echo "$material: $qty" . PHP_EOL;
}
foreach($junk as $material => $qty) {
    echo "$material: $qty" . PHP_EOL;
}
