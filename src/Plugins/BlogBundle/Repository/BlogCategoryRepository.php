<?php

namespace Plugins\BlogBundle\Repository;

use Doctrine\ORM\QueryBuilder;

use AppBundle\Repository\BaseRepository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\LockMode;

/**
 * BlogCategoryRepository
 *
 */
class BlogCategoryRepository extends BaseRepository
{
    /**
     * Find blog categories
     *
     */
    public function findCategory() {
        $query = $this->createQueryBuilder('bc');

        return $query->getQuery()->getResult();
    }
    public function findById($id){
      $query = $this->createQueryBuilder('bc');
      $query->where( 'bc.id = :identifier' )->setParameter('identifier',$id);

      return $query->getQuery()->getResult();
    }
}
