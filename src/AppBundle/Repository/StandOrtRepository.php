<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 30/08/2017
 * Time: 14:52
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class StandOrtRepository extends EntityRepository
{

    public function getStandortAlphaQuery(){

        return $this->createQueryBuilder('standort')->orderBy('standort.StandOrt_Name','ASC');
    }

    public function getOrt($id){

        return $this->createQueryBuilder('ort')
            ->select('ort')
            ->where('ort.id = :id')
            ->setParameter('id',$id )
            ->getQuery()->getArrayResult();

    }

    public function getOrtObj($id){

        return $this->createQueryBuilder('ort')
            ->select('ort')
            ->where('ort.id = :id')
            ->setParameter('id',$id )
            ->getQuery()->execute();

    }

}