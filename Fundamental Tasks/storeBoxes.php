<?php

class Box
{
    private $serialNumber;
    private $item;
    private $quantity;
    private $priceForBox;
    private $price;

    public function __construct($serialNumber,$item,$quantity,$priceForBox,$price)
    {
        $this->serialNumber = $serialNumber;
        $this->item = $item;
        $this->quantity = $quantity;
        $this->priceForBox = $priceForBox;
        $this->price = $price;

    }

    public function getSerialNumber(){
        return $this->serialNumber;
    }

    public function getItem(){
        return $this->item;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getPriceForBox(){
        return $this->priceForBox;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$input = readline();
$items = [];
$boxes = [];
while($input != "end"){
    list($serialNumber,$item,$quantity,$price) = explode(" ",$input);
    $priceForBox = $quantity * $price;
    $boxes[] = new Box($serialNumber,$item,$quantity,$priceForBox,$price);
    $input = readline();
}
uksort($boxes, function ($key1,$key2) use ($boxes){
    $firstPrice = $boxes[$key1]->getPriceForBox();
    $secondPrice = $boxes[$key2]->getPriceForBox();
return $secondPrice <=> $firstPrice;
});
foreach($boxes as $value){
    echo $value->getSerialNumber() . PHP_EOL;
    printf("-- %s - $%.2f: %d\n",$value->getItem(),$value->getPrice(),$value->getQuantity());
    printf("-- $%.2f\n",$value->getPriceForBox());
}
