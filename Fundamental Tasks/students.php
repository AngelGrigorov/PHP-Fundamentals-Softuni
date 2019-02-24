<?php
class Students
{
    private $firstName;
    private $lastName;
    private $age;
    private $homeTown;

    public function __construct($firstName, $lastName, $age, $homeTown)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->homeTown = $homeTown;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getAge(){
        return $this->age;
    }
    public function getHomeTown(){
        return $this->homeTown;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setHomeTown($homeTown)
    {
        $this->homeTown = $homeTown;
    }
}
$info = readline();
$allPeople = [];
function isStudentExisting($allPeople, $firstName, $lastName){
    foreach($allPeople as $student){
        if($student->getFirstName() == $firstName && $student->getLastName() == $lastName){
            return true;
        }
    }
    return false;
}
while($info != "end"){
    list($firstName,$lastName,$age,$homeTown) = explode(" ",$info);
   $person = new Students($firstName,$lastName,$age,$homeTown);
   if(isStudentExisting($allPeople,$firstName,$lastName)){
       foreach($allPeople as $student){
           if($student->getFirstName() == $firstName && $student->getLastName() == $lastName){
               $student->setAge($age);
               $student->setHomeTown($homeTown);
               break;
           }
       }
   }else{
       $student = new Students($firstName,$lastName,$age,$homeTown);
       array_push($allPeople,$student);
   }

    $info = readline();
}
$finalTown = readline();
foreach($allPeople as $person){
    if($person->getHomeTown() === $finalTown){
        echo $person->getFirstName() ." ". $person->getLastName() . " is " . $person->getAge()." years old." .  PHP_EOL;
    }
}