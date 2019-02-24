<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 11/25/2018
 * Time: 8:30 PM
 */

namespace PhonebookBundle\Entity;


class Contact
{
private $name;
private $number;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}