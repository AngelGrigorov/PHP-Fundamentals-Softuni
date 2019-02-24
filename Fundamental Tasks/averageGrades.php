<?php
class Student
{
    private $name;
    private $listOfGrades;
    private $averageGrade;

    /**
     * Student constructor.
     * @param $name
     * @param $listOfGrades
     * @param $averageGrade
     */
    public function __construct($name, $listOfGrades, $averageGrade)
    {
        $this->name = $name;
        $this->listOfGrades = $listOfGrades;
        $this->averageGrade = $averageGrade;
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
    public function getListOfGrades()
    {
        return $this->listOfGrades;
    }

    /**
     * @return mixed
     */
    public function getAverageGrade()
    {
        return $this->averageGrade;
    }
}
$number = intval(readline());
$students = [];
for($i = 0;$i < $number;$i++){
    $sum = 0;
    $grades = [];
    $input = explode(" ",readline());
$name = $input[0];
for($j=1;$j<count($input);$j++){
    $grades[] = $input[$j];
    $sum += $input[$j];
}
$students[] = new Student($name,$grades,$sum/count($grades));
}
uksort($students, function($key1,$key2) use($students){
    $name1 = $students[$key1]->getName();
    $name2 = $students[$key2]->getName();
    $avr1 = $students[$key1]->getAverageGrade();
    $avr2 = $students[$key2]->getAverageGrade();
    if($name1 === $name2){
        return $avr2 <=> $avr1;
    }
    return $name1 <=> $name2;
});
foreach($students as $student){
    if ($student->getAverageGrade() >= 5){
        printf("%s -> %.2f\n", $student->getName(),$student->getAverageGrade());
    }
}