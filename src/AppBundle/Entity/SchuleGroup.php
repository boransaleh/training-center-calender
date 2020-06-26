<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 19/08/2017
 * Time: 21:38
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\StandOrt;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GetGroupStandOrt")
 * @ORM\Table(name="schulegroup")
 */
class SchuleGroup
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
    private $Group_Name;
    /**
     * @ORM\Column(type="datetime")
     */
    private $Eintritt_Date;
    /**
     * @ORM\Column(type="datetime")
     */
    private $Austritt_Date;
    /**
     * @ORM\ManyToOne(targetEntity="StandOrt")
     * @ORM\JoinColumn(nullable=false)
     */
    private $StandOrt;

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
    public function getGroupName()
    {
        return $this->Group_Name;
    }

    /**
     * @param mixed $Group_Name
     */
    public function setGroupName($Group_Name)
    {
        $this->Group_Name = $Group_Name;
    }

    /**
     * @return mixed
     */
    public function getEintrittDate()
    {
        return $this->Eintritt_Date;
    }

    /**
     * @param mixed $Eintritt_Date
     */
    public function setEintrittDate($Eintritt_Date)
    {
        $this->Eintritt_Date = $Eintritt_Date;
    }

    /**
     * @return mixed
     */
    public function getAustrittDate()
    {
        return $this->Austritt_Date;
    }

    /**
     * @param mixed $Austritt_Date
     */
    public function setAustrittDate($Austritt_Date)
    {
        $this->Austritt_Date = $Austritt_Date;
    }

    /**
     * @return mixed
     */
    public function getStandOrt()
    {
        return $this->StandOrt;
    }

    /**
     * @param mixed $StandOrt
     */
    public function setStandOrt(StandOrt $StandOrt)
    {
        $this->StandOrt = $StandOrt;
    }

    public function __toString()
    {
        return $this->Group_Name;
    }


}