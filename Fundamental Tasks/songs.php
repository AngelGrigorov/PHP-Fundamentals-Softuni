<?php
class Song{
    private $typeSong;
    private $name;
    private $time;
    public function __construct($typeSong, $name, $time)
    {
        $this->typeSong = $typeSong;
        $this->name = $name;
        $this->time = $time;
    }
public function getTypeSong(){
        return $this->typeSong;
}
public function  getName(){
        return $this->name;
}
}
$allSongs = [];
$songs = readline();
for($i = 0;$i < $songs;$i++){
    list($type,$name,$time) = explode("_",readline());
    $song = new Song($type, $name, $time);
    $allSongs[] = $song;
}
$typeList = readline();
if($typeList == 'all'){
    foreach ($allSongs as $value){
        echo $value->getName() . PHP_EOL;
    }
}else{
    foreach($allSongs as $value){
        if($value->getTypeSong() === $typeList){
            echo $value->getName() . PHP_EOL;
        }
    }
}