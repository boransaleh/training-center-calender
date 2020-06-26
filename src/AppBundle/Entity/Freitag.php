<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 20/08/2017
 * Time: 10:08
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GultigFeirtageStandOrt")
 * @ORM\Table(name="Freitag")
 */

class Freitag
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Freitag_Datum;

    /**
     * @ORM\Column(type="string")
     */
    private $Freitag_Name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $gultig;



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
    public function getFreitagDatum()
    {
        return $this->Freitag_Datum;
    }

    /**
     * @param mixed $Freitag_Datum
     */
    public function setFreitagDatum($Freitag_Datum)
    {
        $this->Freitag_Datum = $Freitag_Datum;
    }

    /**
     * @return mixed
     */
    public function getFreitagName()
    {
        return $this->Freitag_Name;
    }

    /**
     * @param mixed $Freitag_Name
     */
    public function setFreitagName($Freitag_Name)
    {
        $this->Freitag_Name = $Freitag_Name;
    }

    /**
     * @return mixed
     */
    public function getGultig()
    {
        return $this->gultig;
    }

    /**
     * @param mixed $gultig
     */
    public function setGultig($gultig)
    {
        $this->gultig = $gultig;
    }








}