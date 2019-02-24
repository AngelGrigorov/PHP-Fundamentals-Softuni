<?php
$input = readline();
$videos = [];
while($input != "stats time"){
    if(strpos($input,"-")){
        list($videoName,$views) = explode("-",$input);
        if(!key_exists($videoName,$videos)){
            $videos[$videoName] = [];
            $videos[$videoName]["views"] = $views;
            $videos[$videoName]["likes"] = 0;
        }else{
            $videos[$videoName]["views"] += $views;
        }
    }else if(strpos($input,":")){
        list($command,$videoName) = explode(":",$input);
        if(key_exists($videoName,$videos)){
if($command == "like"){
    $videos[$videoName]["likes"] +=1;
}else if($command == "dislike"){
    $videos[$videoName]["likes"] -=1;
}
        }
    }
    $input = readline();
}
$sortingType = readline();
uksort($videos,function($key1,$key2) use($videos,$sortingType){
    $views1 = $videos[$key1]["views"];
    $views2 = $videos[$key2]["views"];
    $likes1 = $videos[$key1]["likes"];
    $likes2 = $videos[$key2]["likes"];
    if($sortingType == "by views"){
        return $views2 <=> $views1;
    }else{
        return $likes2 <=> $likes1;
    }
});
foreach($videos as $video => $value){
    echo "$video - " . implode(" views - ",$value) . " likes" .PHP_EOL;
}