<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 29/08/2017
 * Time: 10:27
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\StandOrt;

class GetGroupStandOrt extends EntityRepository
{
    public function GetGroups(StandOrt $standOrt){

        return $this->createQueryBuilder('StandOrtGroup')
            ->select('StandOrtGroup')
            ->where('StandOrtGroup.StandOrt = :standort')
            ->setParameter('standort',$standOrt )
            ->getQuery()->getResult();

    }
    public function GetGroupsCount(StandOrt $standOrt, $date){

        return $this->createQueryBuilder('StandOrtGroup')
            ->select('count(StandOrtGroup.id)')
            ->where('StandOrtGroup.StandOrt = :standort')
            ->andWhere('StandOrtGroup.Austritt_Date > :currentdate')
            ->setParameter('standort',$standOrt )
            ->setParameter('currentdate',$date )
            ->getQuery()->getSingleScalarResult();
    }



}
