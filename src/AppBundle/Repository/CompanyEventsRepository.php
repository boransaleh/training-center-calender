<?php
namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Dozent;
use AppBundle\Entity\SchuleGroup;
use AppBundle\Entity\StandOrt;
use AppBundle\Entity\EventType;

class CompanyEventsRepository extends EntityRepository
{
    public function checkEventQuery(Dozent $D, $Date ){

        return $this->createQueryBuilder('event')
            ->select('event')
            ->where('event.Dozent = :D')
            ->andWhere('event.EventDate = :Date ')
            ->setParameter('Date',$Date )
            ->setParameter('D',$D )
            ->getQuery()->getResult();

    }
    public function DeleteFreitageEventQuery(SchuleGroup $group ,EventType $eventType){

        return $this->createQueryBuilder('AppBundle:CompanyEvents')
            ->delete('AppBundle:CompanyEvents', 's')
            ->where('s.SchuleGroup =:eventgroup AND s.eventtype =:eventtype ')
            ->setParameter('eventgroup',$group )
            ->setParameter('eventtype',$eventType )
            ->getQuery()->getResult();

    }

    public function getGroupEvents(SchuleGroup $group , EventType $type){

        return $this->createQueryBuilder('event')
            ->select('event')
            ->where('event.SchuleGroup =:schulegroup')
            ->andWhere('event.eventtype =:eventtype')
            ->setParameter('schulegroup',$group)
            ->setParameter('eventtype',$type)
            ->getQuery()->execute();
    }

    public function getEventsByStandOrt(StandOrt $ort , EventType $type){

        return $this->createQueryBuilder('CompanyEvents')
            ->select('sum(CompanyEvents.EventHours)')
            ->where('CompanyEvents.StandOrt =:standort')
            ->andWhere('CompanyEvents.eventtype =:eventtype')
            ->setParameter('standort',$ort)
            ->setParameter('eventtype',$type)
            ->getQuery()->getSingleScalarResult();
    }

    public function getSumEventsByDozent(Dozent $dozent){

        return $this->createQueryBuilder('CompanyEvents')
            ->select('sum(CompanyEvents.EventHours)')
            ->where('CompanyEvents.Dozent =:dozent')
            ->setParameter('dozent',$dozent)
            ->getQuery()->getSingleScalarResult();
    }

    public function getEventsbyGroup(SchuleGroup $schuleGroup,$fromDate,$toDate){

        return $this->createQueryBuilder('events')
            ->select('events')
            ->where('events.EventDate  <= :toDate ')
            ->andWhere('events.EventDate >= :fromDate')
            ->andWhere('events.SchuleGroup =:schulegroup')
            ->orderBy('events.EventDate')
            ->setParameter('toDate',$toDate)
            ->setParameter('fromDate',$fromDate)
            ->setParameter('schulegroup',$schuleGroup)
            ->getQuery()->execute();


    }

    public function getEventsbyGroupandEinzehlfach(SchuleGroup $schuleGroup,EventType $eventType){

        return $this->createQueryBuilder('events')
            ->select('events,SUM(events.EventHours)')
            ->where('events.SchuleGroup =:schulegroup')
            ->andWhere('events.eventtype =:eventtype')
            ->setParameter('schulegroup',$schuleGroup)
            ->setParameter('eventtype',$eventType)
            ->groupBy('events.EinzelFach')
            ->getQuery()->execute();


    }

    public function getUrlaubOfgroup(SchuleGroup $schuleGroup,EventType $eventType){

        return $this->createQueryBuilder('events')
            ->select('SUM(events.EventHours)')
            ->where('events.SchuleGroup =:schulegroup')
            ->andWhere('events.eventtype =:eventtype')
            ->setParameter('schulegroup',$schuleGroup)
            ->setParameter('eventtype',$eventType)
            ->getQuery()->execute();

    }
    public function getPraktikumOfgroup(SchuleGroup $schuleGroup,EventType $eventType){

        return $this->createQueryBuilder('events')
            ->select('SUM(events.EventHours)')
            ->where('events.SchuleGroup =:schulegroup')
            ->andWhere('events.eventtype =:eventtype')
            ->setParameter('schulegroup',$schuleGroup)
            ->setParameter('eventtype',$eventType)
            ->getQuery()->execute();

    }

    public function getEventsbydozentandgroup(SchuleGroup $schuleGroup,$fromDate,$toDate ,Dozent $Dozent){

        return $this->createQueryBuilder('events')
            ->select('events')
            ->where('events.EventDate  <= :toDate ')
            ->andWhere('events.EventDate >= :fromDate')
            ->andWhere('events.SchuleGroup =:schulegroup')
            ->andWhere('events.Dozent =:Dozent')
            ->orderBy('events.EventDate')
            ->setParameter('toDate',$toDate)
            ->setParameter('fromDate',$fromDate)
            ->setParameter('schulegroup',$schuleGroup)
            ->setParameter('Dozent',$Dozent)
            ->getQuery()->execute();


    }

    public function getEventsbyDozent($fromDate,$toDate ,Dozent $Dozent){

        return $this->createQueryBuilder('events')
            ->select('events')
            ->where('events.EventDate  <= :toDate ')
            ->andWhere('events.EventDate >= :fromDate')
            ->andWhere('events.Dozent =:Dozent')
            ->orderBy('events.EventDate')
            ->setParameter('toDate',$toDate)
            ->setParameter('fromDate',$fromDate)
            ->setParameter('Dozent',$Dozent)
            ->getQuery()->execute();


    }

    public function getEventsbydate($fromDate,$toDate ,StandOrt $ort ){

        return $this->createQueryBuilder('events')
            ->select('events')
            ->where('events.EventDate  <= :toDate ')
            ->andWhere('events.EventDate >= :fromDate')
            ->andWhere('events.StandOrt= :ort')
            ->orderBy('events.EventDate')
            ->setParameter('toDate',$toDate)
            ->setParameter('fromDate',$fromDate)
            ->setParameter('ort',$ort)
            ->getQuery()->execute();
    }
    



}