<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 19/08/2017
 * Time: 22:21
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="GesamtFach")
 */

class GesamtFach
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

    private $GesamtFach_Name;

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
    public function getGesamtFachName()
    {
        return $this->GesamtFach_Name;
    }

    /**
     * @param mixed $GesamtFach_Name
     */
    public function setGesamtFachName($GesamtFach_Name)
    {
        $this->GesamtFach_Name = $GesamtFach_Name;
    }

    public function __toString()
    {
        return $this->GesamtFach_Name;
    }


}