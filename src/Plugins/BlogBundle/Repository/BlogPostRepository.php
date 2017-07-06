<?php

namespace Plugins\BlogBundle\Repository;

use Doctrine\ORM\QueryBuilder;
// use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;

use AppBundle\Repository\BaseRepository;
use Plugins\BlogBundle\Entity\BlogCategory;
use Plugins\BlogBundle\Entity\BlogTopic;


/**
 * BlogPostRepository
 *
 */
class BlogPostRepository extends BaseRepository
{

    /**
     * Find news
     *
     * @param int $limit
     * @param int $offset
     * @param BlogCategory $category
     * @param BlogTopic $topic
     * @param string $phrases
     * @param string $order - available ('public_at')
     *
     * @return array
     */
    public function findPosts($limit = 0, $offset = 0, BlogCategory $category = null, BlogTopic $topic = null, $phrases = null, $order = 'public_at') {
        $query = $this->createQueryBuilder('bp');
        $query = $this->prepareQuery($query, $category, $topic, $phrases);

        switch ($order) {
            case 'public_at':
                $query->orderBy('bp.public_at', 'DESC');
                break;
        }

        $limit = (int) $limit;
        $offset = (int) $offset;

        if ($limit > 0) {
            $query->setMaxResults(intval($limit));
        }

        if ($offset > 0) {
            $query->setFirstResult($offset);
        }

        return $query->getQuery()->getResult();
    }

    public function findAllPosts($offset = 0, BlogCategory $category = null, BlogTopic $topic = null, $phrases = null, $order = 'public_at') {
        $query = $this->createQueryBuilder('bp');
        $query = $this->prepareQuery($query, $category, $topic, $phrases);

        switch ($order) {
            case 'public_at':
                $query->orderBy('bp.public_at', 'DESC');
                break;
        }

        $offset = (int) $offset;

        if ($offset > 0) {
            $query->setFirstResult($offset);
        }

        return $query->getQuery()->getResult();
    }

    /**
     * Count posts
     * @param BlogCategory $category
     * @param BlogTopic $topic
     * @param string $phrases
     *
     * @return mixed
     */
    public function countPosts(BlogCategory $category = null, BlogTopic $topic = null, $phrases = null) {
        $query = $this->createQueryBuilder('bp');
        $query->select('COUNT(bp)');

        $query = $this->prepareQuery($query, $category, $topic, $phrases);

        return $query->getQuery()->getSingleScalarResult();
    }

    /**
     * Prepare query for find and count posts
     *
     * @param QueryBuilder $query
     * @param BlogCategory $category
     * @param BlogTopic $topic
     * @param string $phrases
     *
     * @return QueryBuilder
     */
    protected function prepareQuery(QueryBuilder $query, BlogCategory $category = null, BlogTopic $topic = null, $phrases = null) {

        if (!empty($phrases)) {
            $phrases = explode(' ', $phrases);
        } else {
            $phrases = array();
        }

        $query->where('bp.public_at < :date')->setParameter('date', date('Y-m-d H:i:s'));
        foreach ($phrases as $key => $phrase) {
            if (!empty($phrase)) {
                $query->andWhere($query->expr()->orX(
                    $query->expr()->like('LOWER(bp.name)', ':phrase' . $key),
                    $query->expr()->like('LOWER(bp.short)', ':phrase' . $key),
                    $query->expr()->like('LOWER(bp.content)', ':phrase' . $key)
                ));
            }
        }
        foreach ($phrases as $key => $phrase) {
            if (!empty($phrase)) {
                $query->setParameter('phrase' . $key, '%' . mb_strtolower($phrase, 'UTF-8') . '%');
            }
        }

        if (!empty($category)) {
            $query->andWhere('bp.blogCategory = :category')
                ->setParameter('category', $category);
        }

        if (!empty($topic)) {
            $query->andWhere('bp.blogTopic = :topic')
                ->setParameter('topic', $topic);
        }

        return $query;
    }

    /**
     * Find popular posts
     *
     * @param integer $limit
     * @return array
     */
    public function findPopularPosts($limit) {
        $query = $this->createQueryBuilder('bp');
        $query->where('bp.public_at <= :now')
            ->setParameter('now', date('Y-m-d H:i:s'))
            ->andWhere('bp.is_popular = 1');
        $query->orderBy('bp.public_at', 'DESC');

        if (!empty($limit)) {
            $query->setMaxResults($limit);
        }

        return $query->getQuery()->getResult();
    }

    /**
     * Find short list of posts
     *
     * @param $id
     * @return array
     */
    public function findPost($id) {
        $query = $this->createQueryBuilder('bp');
        $query->where('bp.public_at <= :now')
            ->andWhere('bp.id = :id')
            ->setParameter('now', date('Y-m-d H:i:s'))
            ->setParameter('id', $id);

        return $query->getQuery()->getSingleResult();
    }

    /**
     * Find short list of posts
     *
     * @param integer $limit
     * @return array
     */
    public function findLast($limit = 0) {
        $query = $this->createQueryBuilder('bp');
        $query->where('bp.public_at <= :now')
              ->setParameter('now', date('Y-m-d H:i:s'));
        $query->orderBy('bp.public_at', 'DESC');


        if (!empty($limit)) {
            $query->setMaxResults($limit);
        }

        return $query->getQuery()->getResult();
    }

    public function findByString($str){
      $query = $this->createQueryBuilder('bp');
      $query->where(
         $query->expr()->like('bp.name', ':str')
      );
      $query->orWhere('MATCH (bp.name) AGAINST (:str) > 1')
       ->setParameter('str','%'.$str.'%');

      $query->setParameter('str','%'.$str.'%');

      return $query->getQuery()->getResult();
    }

}
