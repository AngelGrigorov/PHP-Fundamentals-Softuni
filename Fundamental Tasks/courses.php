<?php
$course = readline();
$courses = [];
while($course != "end"){
    $course = explode(" : ",$course);

    if(!key_exists($course[0],$courses)){
        $courses[$course[0]] = [];
    }
    array_push($courses[$course[0]],$course[1]);
    $course = readline();

}
uasort($courses, function ($key1, $key2) {
    $key1 = count($key1);
    $key2 = count($key2);
    return($key1 == $key2) ? 0 : (($key1 < $key2) ? 1 : -1);
});

foreach ($courses as $key => $value){

    echo "$key: " . count($courses[$key]) . PHP_EOL;
    asort($value);

    echo "-- ". implode(PHP_EOL . "-- ",$value) . PHP_EOL;

}