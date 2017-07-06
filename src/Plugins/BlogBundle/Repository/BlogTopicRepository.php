<?php

namespace Plugins\BlogBundle\Repository;

use AppBundle\Repository\BaseRepository;

/**
 * BlogTopicRepository
 *
 */
class BlogTopicRepository extends BaseRepository
{
    /**
     * Find news
     *
     */
    public function findTopics() {
        $query = $this->createQueryBuilder('bt');
        
//        $limit = (int) $limit;
//        $offset = (int) $offset;
    
        return $query->getQuery()->getResult();
    }
}