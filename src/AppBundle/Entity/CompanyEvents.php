<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use fadosProduccions\fullCalendarBundle\Entity\Event as BaseEvent;
use AppBundle\Entity\EinzelFach;
use AppBundle\Entity\Dozent;
use AppBundle\Entity\SchuleGroup;
use AppBundle\Entity\EventType;
use AppBundle\Entity\StandOrt;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyEventsRepository")
 * @ORM\Table(name="companyEvents")
 */
class CompanyEvents extends BaseEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */

    private $EventDate;

    /**
     * @ORM\ManyToOne(targetEntity="EinzelFach", fetch="EAGER")
     */
    private $EinzelFach;
    /**
     * @ORM\ManyToOne(targetEntity="Dozent",  fetch="EAGER")
     */
    private $Dozent;

    /**
     * @ORM\ManyToOne(targetEntity="SchuleGroup",  fetch="EAGER")
     */
    private $SchuleGroup;

    /**
     * @ORM\ManyToOne(targetEntity="EventType",  fetch="EAGER")
     */
    private $eventtype;

    /**
     * @ORM\ManyToOne(targetEntity="StandOrt", fetch="EAGER")
     */
    private $StandOrt;

    /**
     * @ORM\Column(type="integer")
     */
    private $EventHours;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEinzelFach()
    {
        return $this->EinzelFach;
    }

    /**
     * @param mixed $EinzelFach
     */
    public function setEinzelFach(EinzelFach $EinzelFach)
    {
        $this->EinzelFach = $EinzelFach;
    }

    /**
     * @return mixed
     */
    public function getDozent()
    {
        return $this->Dozent;
    }

    /**
     * @param mixed $Dozent
     */
    public function setDozent(Dozent $Dozent)
    {
        $this->Dozent = $Dozent;
    }

    /**
     * @return mixed
     */
    public function getSchuleGroup()
    {
        return $this->SchuleGroup;
    }

    /**
     * @param mixed $SchuleGroup
     */
    public function setSchuleGroup(SchuleGroup $SchuleGroup)
    {
        $this->SchuleGroup = $SchuleGroup;
    }

    /**
     * @return mixed
     */
    public function getEventDate()
    {
        return $this->EventDate;
    }

    /**
     * @param mixed $EventDate
     */
    public function setEventDate($EventDate)
    {
        $this->EventDate = $EventDate;
    }

    /**
     * @return mixed
     */
    public function getEventtype()
    {
        return $this->eventtype;
    }

    /**
     * @param mixed $eventtype
     */
    public function setEventtype(EventType $eventtype)
    {
        $this->eventtype = $eventtype;
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

    /**
     * @return mixed
     */
    public function getEventHours()
    {
        return $this->EventHours;
    }

    /**
     * @param mixed $EventHours
     */
    public function setEventHours($EventHours)
    {
        $this->EventHours = $EventHours;
    }




}