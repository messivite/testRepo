<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Students
 *
 * @ORM\Table(name="students")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentsRepository")
 */
class Students
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
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="profileImage", type="string", length=255)
     */
    private $profileImage;

    /**
     * @var string
     *
     * @ORM\Column(name="placeOfBirth", type="string", length=255)
     */
    private $placeOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="customNote", type="text")
     */
    private $customNote;

    /**
     * @var int
     *
     * @ORM\Column(name="totalPoint", type="integer")
     */
    private $totalPoint;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Students
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Students
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set profileImage
     *
     * @param string $profileImage
     *
     * @return Students
     */
    public function setProfileImage($profileImage)
    {
        $this->profileImage = $profileImage;

        return $this;
    }

    /**
     * Get profileImage
     *
     * @return string
     */
    public function getProfileImage()
    {
        return $this->profileImage;
    }

    /**
     * Set placeOfBirth
     *
     * @param string $placeOfBirth
     *
     * @return Students
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    /**
     * Get placeOfBirth
     *
     * @return string
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * Set customNote
     *
     * @param string $customNote
     *
     * @return Students
     */
    public function setCustomNote($customNote)
    {
        $this->customNote = $customNote;

        return $this;
    }

    /**
     * Get customNote
     *
     * @return string
     */
    public function getCustomNote()
    {
        return $this->customNote;
    }

    /**
     * Set totalPoint
     *
     * @param integer $totalPoint
     *
     * @return Students
     */
    public function setTotalPoint($totalPoint)
    {
        $this->totalPoint = $totalPoint;

        return $this;
    }

    /**
     * Get totalPoint
     *
     * @return int
     */
    public function getTotalPoint()
    {
        return $this->totalPoint;
    }
}

