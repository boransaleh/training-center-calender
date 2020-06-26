<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 19/08/2017
 * Time: 20:43
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\StandOrt;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DozentRepository")
 * @ORM\Table(name="dozent")
 */

class Dozent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $Dozent_Name;
    /**
     * @ORM\Column(type="string",unique=true)
     */
    private $Dozent_Email;

    /**
     * @ORM\ManyToOne(targetEntity="StandOrt")
     * @ORM\JoinColumn(nullable=false)
     */

    private $Dozent_StandOrt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Gultig;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getDozentName()
    {
        return $this->Dozent_Name;
    }

    /**
     * @param mixed $Dozent_Name
     */
    public function setDozentName($Dozent_Name)
    {
        $this->Dozent_Name = $Dozent_Name;
    }

    /**
     * @return mixed
     */
    public function getDozentEmail()
    {
        return $this->Dozent_Email;
    }

    /**
     * @param mixed $Dozent_Email
     */
    public function setDozentEmail($Dozent_Email)
    {
        $this->Dozent_Email = $Dozent_Email;
    }

    /**
     * @return mixed
     */
    public function getDozentStandOrt()
    {
        return $this->Dozent_StandOrt;
    }

    /**
     * @param mixed $Dozent_StandOrt
     */
    public function setDozentStandOrt(StandOrt $Dozent_StandOrt)
    {
        $this->Dozent_StandOrt = $Dozent_StandOrt;
    }

    public function __toString()
    {
        return $this->Dozent_Name;
    }

    /**
     * @return mixed
     */
    public function getGultig()
    {
        return $this->Gultig;
    }

    /**
     * @param mixed $Gultig
     */
    public function setGultig($Gultig)
    {
        $this->Gultig = $Gultig;
    }


}