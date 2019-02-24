<?php

class Car
{
    private $model;
    private $fuelAmount;
    private $fuelConsumption;
    private $traveled;

    /**
     * Car constructor.
     * @param $model
     * @param $fuelAmount
     * @param $fuelConsumption
     * @param $traveled
     */
    public function __construct($model, $fuelAmount, $fuelConsumption, $traveled)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelConsumption = $fuelConsumption;
        $this->traveled = $traveled;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getFuelAmount()
    {
        return $this->fuelAmount;
    }

    /**
     * @param mixed $fuelAmount
     */
    public function setFuelAmount($fuelAmount): void
    {
        $this->fuelAmount = ($this->fuelAmount - $fuelAmount);
    }

    /**
     * @return mixed
     */
    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }

    /**
     * @return mixed
     */
    public function getTraveled()
    {
        return $this->traveled;
    }

    /**
     * @param mixed $traveled
     */
    public function setTraveled($traveled): void
    {
        $this->traveled += $traveled;
    }

    public function drive($cars, $model, $distance): bool
    {
        foreach($cars as $val){
            $thisModel = $val->getModel();
            if ($model == $thisModel) {
                if (($val->getFuelAmount() - ($val->getfuelConsumption() * $distance)) > 0) {

                    return true;
                }else{
                    return false;

                }
            }
        }



    }

}

$cars = [];
$n = intval(readline());
for ($i = 0; $i < $n; $i++) {
    list($model, $fuelAmount, $fuelConsumption) = explode(" ", readline());
    $cars[] = new Car($model, $fuelAmount, $fuelConsumption, 0);
}
$input = readline();
while ($input != "End") {
    list($command, $model, $distance) = explode(" ", $input);
    foreach ($cars as $v) {
        if ($v->getModel() == $model) {
            $temp = $v->drive($cars, $model, $distance);
            if ($temp === true) {
                $fuel = $v->getFuelAmount()  - ($v->getFuelAmount() - ($v->getFuelConsumption() * $distance));
                $distance = $v->getTraveled + $distance;
                $v->setFuelAmount($fuel);
                $v->setTraveled($distance);

            } else if ($temp === false) {
                echo "Insufficient fuel for the drive" . PHP_EOL;

            }
        }
    }
        $input = readline();

}
foreach($cars as $value){
    printf("%s %.2f %d\n",$value->getModel(),$value->getFuelAmount(),$value->getTraveled());
}
