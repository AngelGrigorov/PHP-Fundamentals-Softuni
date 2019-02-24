<?php
$lines = intval(readline());
$catalogue = [];
for($i=0;$i < $lines;$i++){
    $products = readline();
    if(!key_exists($products[0],$catalogue)){
        $catalogue[$products[0]] = [];
    }
    array_push($catalogue[$products[0]] , $products);

}
ksort($catalogue);
foreach($catalogue as $keys => $product){

    echo $keys . PHP_EOL;
    asort($product);
$pairs = explode(" : ",$product);
echo "  ". implode(": ",$pairs). PHP_EOL;
}