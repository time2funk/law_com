<?php

namespace Plugins\PracticAreaBundle\Repository;

use AppBundle\Repository\BaseRepository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\LockMode;

/**
 * PracticAreaSubSectionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PracticAreaSubSectionRepository extends BaseRepository
{
  public function findByString($str){
    $query = $this->createQueryBuilder('pa');
    $query->where('MATCH (pa.name) AGAINST (:str) > 1')
     ->setParameter('str','%'.$str.'%');
    $query->orWhere(
       $query->expr()->like('pa.name', ':str')
    );
    $query->setParameter('str','%'.$str.'%');

    return $query->getQuery()->getResult();
  }
}