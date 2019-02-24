<?php

/**
 * Class Group
 */
class Group
{
    /**
     * @var
     */
    private $user;
    /**
     * @var array
     */
    private $comments;
    /**
     * @var array
     */
    private $dates;

    /**
     * Group constructor.
     * @param $user
     * @param array $comments
     * @param array $dates
     */
    public function __construct($user, Array $comments = null, Array $dates = null)
    {
        $this->user = $user;
        $this->comments = $comments;
        $this->dates = $dates;
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
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param array $comments
     */
    public function setComments($comments): void
    {
        array_push($this->comments, $comments);
    }

    /**
     * @return array
     */
    public function getDates(): array
    {

        uasort(

        /**
         * @param $a
         * @param $b
         * @return int
         */
            $this->dates,

            function ($a, $b) {
                return $a <=> $b;
            }
        );

        return $this->dates;
    }

    /**
     * @param array $dates
     */
    public function setDates($dates): void
    {
        array_push($this->dates, $dates);
    }

}

/**
 * @param $data
 * @param $user
 * @return bool
 */
function userExist($data, $user)
{
    foreach ($data as $val) {
        if ($val->getUser() == $user) {
            return true;
        }
    }

    return false;
}

/** @var array $group */
$group = [];
while (($command = readline()) != "end of dates") {
    $tokens = explode(" ", $command);
    $user = $tokens[0];
    if (!isset($tokens[1])) {
        $dates = array();
    } else {
        $dates = explode(",", $tokens[1]);
    }
    if (!userExist($group, $user)) {
        $generateUser = new Group($user, array(), $dates);
        array_push($group, $generateUser);
    } else {
        foreach ($group as $data) {
            foreach ($dates as $date) {
                $data->setDates($date);
            }
        }
    }
}
while (($command = readline()) != "end of comments") {
    $tokens = explode("-", $command);
    $user = $tokens[0];
    $comment = $tokens[1];
    if (userExist($group, $user)) {
        foreach ($group as $data) {
            if ($user == $data->getUser()) {
                $data->setComments($comment);
            }
        }
    }
}
uasort(
/**
 * @param Group $a
 * @param Group $b
 * @return int
 */
    $group,
    function (Group $a, Group $b) {
        $user1 = $a->getUser();
        $user2 = $b->getUser();

        return $user1 <=> $user2;
    }
);
foreach ($group as $data) {
    echo $data->getUser().PHP_EOL;
    echo "Comments:".PHP_EOL;
    foreach ($data->getComments() as $comment) {
        echo "- {$comment}".PHP_EOL;
    }
    echo "Dates attended:".PHP_EOL;
    foreach ($data->getDates() as $date) {
        echo "-- {$date}".PHP_EOL;
    }
}