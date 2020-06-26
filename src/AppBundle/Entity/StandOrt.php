<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 19/08/2017
 * Time: 20:24
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StandOrtRepository")
 * @ORM\Table(name="standort")
 */
class StandOrt
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

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
     * @ORM\Column(type="string")
     */
    private $StandOrt_Name;

    /**
     * @return mixed
     */
    public function getStandOrtName()
    {
        return $this->StandOrt_Name;
    }

    /**
     * @param mixed $StandOrt_Name
     */
    public function setStandOrtName($StandOrt_Name)
    {
        $this->StandOrt_Name = $StandOrt_Name;
    }
    public function __toString()
    {
        return $this->StandOrt_Name;
    }



}