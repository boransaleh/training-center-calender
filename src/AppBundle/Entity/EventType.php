<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 28/08/2017
 * Time: 13:13
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="eventtype")
 */

class EventType
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
    private $Event_Type_Name;

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
    public function getEventTypeName()
    {
        return $this->Event_Type_Name;
    }

    /**
     * @param mixed $Event_Type_Name
     */
    public function setEventTypeName($Event_Type_Name)
    {
        $this->Event_Type_Name = $Event_Type_Name;
    }

    function __toString()
    {
        return $this->Event_Type_Name;
    }


}