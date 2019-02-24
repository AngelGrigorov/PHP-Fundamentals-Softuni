<?php
class Person
{
    private $name;
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

}
$family = [];
$n = intval(readline());
for($i = 0;$i < $n;$i++){
    list($name,$age) = explode(" ",readline());
    $member = new Person($name,$age);
    array_push($family,$member);
}
uksort($family,function ($key1,$key2) use($family){
    $age1 = $family[$key1]->getAge();
    $age2 = $family[$key2]->getAge();
    return $age2<=>$age1;
});
foreach($family as $persons){
    echo $persons->getName() . " " . $persons->getAge();
    return;
}