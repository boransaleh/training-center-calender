<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 19/08/2017
 * Time: 22:25
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\GesamtFach;

/**
 * @ORM\Entity
 * @ORM\Table(name="EinzelFach")
 */

class EinzelFach
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
    private $EinzelFach_Name;
    /**
     * @ORM\ManyToOne(targetEntity="GesamtFach")
     * @ORM\JoinColumn(nullable=false)
     */
    private $GesamtFach;

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
    public function getEinzelFachName()
    {
        return $this->EinzelFach_Name;
    }

    /**
     * @param mixed $EinzelFach_Name
     */
    public function setEinzelFachName($EinzelFach_Name)
    {
        $this->EinzelFach_Name = $EinzelFach_Name;
    }

    /**
     * @return mixed
     */
    public function getGesamtFach()
    {
        return $this->GesamtFach;
    }

    /**
     * @param mixed $GesamtFach
     */
    public function setGesamtFach(GesamtFach $GesamtFach)
    {
        $this->GesamtFach = $GesamtFach;
    }

    public function __toString()
    {
        return $this->EinzelFach_Name;
    }



}