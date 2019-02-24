<?php
$lines = intval(readline());
$list = [];
for($i = 0;$i < $lines;$i++) {
    $action = readline();
    if (strpos($action, 'not') == false) {
       $action = explode(" ",$action);
        if (in_array($action[0],$list)) {
            echo "$action[0] is already in the list!" . PHP_EOL;
        } else {
            $list[] = $action[0];
        }
    } else {
        $action = explode(" ",$action);
        if (in_array($action[0],$list)) {
            $index = array_search($action[0],$list);
            unset($list[$index]);
        } else {
            echo "$action[0] is not in the list!" . PHP_EOL;
        }
    }
}
for($i = 0;$i < count($list);$i++){
    echo $list[$i] . PHP_EOL;
}