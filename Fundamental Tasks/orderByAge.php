<?php
class HUMAN
{
    private $name;
    private $id;
    private $age;
    public function __construct($name,$id,$age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getID()
    {
        return $this->id;
    }
    public function getAge()
    {
        return $this->age;
    }

}
$input = readline();
$persons = [];
while($input != "End"){
    list($name,$id,$age) = explode(" ",$input);
    $persons[] = new HUMAN($name,$id,$age);
    $input = readline();
}
uksort($persons, function($key1,$key2) use($persons){
    $age1 = $persons[$key1]->getAge();
    $age2 = $persons[$key2]->getAge();
    return $age1 <=> $age2;
});
foreach ($persons as $value){
    echo $value->getName() . " with ID: " . $value->getID() . " is " . $value->getAge() . " years old." . PHP_EOL;
}
