<?php
class Car
{
    private $brand;
    private $model;
    private $hp;
    public function __construct($brand,$model,$hp)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->hp = $hp;
    }
    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getHp()
    {
        return $this->hp;
    }
}
class Truck
{
    private $brand;
    private $model;
    private $weight;
    public function __construct($brand,$model,$weight)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->weight = $weight;
    }
    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }
    public function getWeight()
    {
        return $this->weight;
    }

}
$input = readline();
$cars = [];
$trucks = [];
while($input != "end"){
    list($type,$brand,$model,$power) = explode("/",$input);
    if($type == "Car"){
        $cars[] = new Car($brand,$model,$power);
    }
    if($type == "Truck"){
        $trucks[] = new Truck($brand,$model,$power);
    }
    $input = readline();
}
sort($cars);
sort($trucks);
if(count($cars) > 0){
    echo "Cars: " . PHP_EOL;
    foreach ($cars as $value) {
        echo $value->getBrand() . ": " . $value->getModel() . " - " . $value->getHp() . "hp" . PHP_EOL;

    }
}
if(count($trucks) > 0) {
    echo "Trucks: " . PHP_EOL;
    foreach ($trucks as $values) {
        echo $values->getBrand() . ": " . $values->getModel() . " - " . $values->getWeight() . "kg" . PHP_EOL;
    }
}