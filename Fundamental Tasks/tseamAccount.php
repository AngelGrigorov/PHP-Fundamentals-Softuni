<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 12/13/2018
 * Time: 10:00 PM
 */
$games = explode(" ",readline());
$line  = readline();
while($line != "Play!") {
    list($command, $game) = explode(" ", $line);
    if ($command == "Install") {
        if (!in_array($game, $games)) {
            array_push($games, $game);
        }
    } else if ($command == "Uninstall") {
        if(in_array($game, $games)) {
            $index = array_search($game,$games);
            unset($games[$index]);
            $games = array_values($games);
        }
    } else if ($command == "Update") {
        if (in_array($game, $games)) {
            $index = array_search($game,$games);
            unset($games[$index]);
            array_push($games, $game);
        }
}else if($command == "Expansion"){
        list($theGame,$expansion) = explode("-", $game);
        if(in_array($theGame,$games)){
            $index = array_search($theGame,$games);
        array_splice($games, $index+1, 0, "$theGame:$expansion");
}
    }
    $line = readline();


}
echo implode(" ",$games);