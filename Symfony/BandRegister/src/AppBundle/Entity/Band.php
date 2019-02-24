<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Band
 *
 * @ORM\Table(name="band")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BandRepository")
 */
class Band
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="members", type="string", length=255)
     */
    private $members;

    /**
     * @var float
     *
     * @ORM\Column(name="honorarium", type="float")
     */
    private $honorarium;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Band
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set members.
     *
     * @param string $members
     *
     * @return Band
     */
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get members.
     *
     * @return string
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set honorarium.
     *
     * @param float $honorarium
     *
     * @return Band
     */
    public function setHonorarium($honorarium)
    {
        $this->honorarium = $honorarium;

        return $this;
    }

    /**
     * Get honorarium.
     *
     * @return float
     */
    public function getHonorarium()
    {
        return $this->honorarium;
    }

    /**
     * Set genre.
     *
     * @param string $genre
     *
     * @return Band
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre.
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
