<?php
class Team
{
private $user;

private $teamNames;


    /**
     * Project constructor.
     * @param $user
     * @param $teamNames
     */
    public function __construct($user,$teamNames)
    {
        $this->user = $user;
        $this->teamNames = $teamNames;

    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getTeamNames()
    {
        return $this->teamNames;
    }

    /**
     * @param mixed $teamNames
     */
    public function setTeamNames($teamNames): void
    {
        $this->teamNames = $teamNames;
    }

}
function teamExist($teams, $team)
{
    foreach ($teams as $val) {
        if ($val->getTeamNames() == $team) {
            return true;
        }
    }

    return false;
}
function creatorExist($teams, $user)
{
    foreach ($teams as $val) {
        if ($val->getUser() == $user) {
            return true;
        }
    }

    return false;
}

$teams = [];
$n = intval(readline());
for($i=0;$i < $n;$i++){
    $input = explode("-",readline());
if(teamExist($teams,$input[1])){
    echo "Team $input[1] was already created!" . PHP_EOL;
    continue;
}
if(creatorExist($teams,$input[0])){
    echo "$input[0] cannot create another team!" . PHP_EOL;
    continue;
} $newTeam= new Team($input[0],$input[1]);
    array_push($teams,$newTeam);
}
$newInput = readline();
while($newInput != "end of assignment") {
    $newInput = explode("->",$newInput);
    if (!teamExist($teams, $newInput[1])) {
        echo "Team $newInput[1] does not exist!" . PHP_EOL;
        continue;
    }
    if (creatorExist($teams, $newInput[0])) {
        echo "Member $newInput[0] cannot join team $newInput[1]!" . PHP_EOL;
        continue;
    }
    foreach ($teams as $value) {
        if ($newInput[1] == $value->getTeamNames()) {
            $value->setUser($newInput[0]);
        }

    }
    $newInput = readline();

}
var_dump($teams);