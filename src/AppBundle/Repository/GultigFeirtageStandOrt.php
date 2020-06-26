<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 28/08/2017
 * Time: 22:48
 */

namespace AppBundle\Repository;

use AppBundle\Entity\FeirtagStandOrt;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\StandOrt;

class GultigFeirtageStandOrt extends EntityRepository
{
    public function getGultigFeirtageStandort(\DateTime $from ,\DateTime $to){

        return $this->createQueryBuilder('GFtage')
            ->select('GFtage')
            ->where('GFtage.Freitag_Datum  <= :toDate ')
            ->andWhere('GFtage.Freitag_Datum >= :fromDate')
            ->andWhere('GFtage.gultig = :gultig ')
            ->setParameter('toDate',$to )
            ->setParameter('fromDate',$from )
            ->setParameter('gultig',1 )
            ->getQuery()->getResult();

    }



}