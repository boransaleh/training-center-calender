<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 07/09/2017
 * Time: 13:34
 */

namespace AppBundle\Repository;

use AppBundle\Entity\StandOrt;
use Doctrine\ORM\EntityRepository;

class DozentRepository extends EntityRepository
{

    public function getCountDozent(StandOrt $ort){

        return $this->createQueryBuilder('dozent')
            ->select('count(dozent.id)')
            ->where('dozent.Dozent_StandOrt = :standort')
            ->andWhere('dozent.Gultig = :status')
            ->setParameter('standort',$ort)
            ->setParameter('status',true)
            ->getQuery()->getSingleScalarResult();

    }
    public function getDozentByOrt(StandOrt $ort){

        return $this->createQueryBuilder('dozent')
            ->select('dozent')
            ->where('dozent.Dozent_StandOrt = :standort')
            ->andWhere('dozent.Gultig = :status')
            ->setParameter('standort',$ort)
            ->setParameter('status',true)
            ->getQuery()->getResult();
    }

}