<?php
// src/AppBundle/Repository/InterestRepository.php
namespace AppBundle\Repository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\LockMode;

class BaseRepository extends EntityRepository {
    
    /**
     * Save method. Set `created at` and `updated at` fields for object
     * 
     * @param Doctrine\Entity $entity
     * @return Doctrine\Entity
     */
    public function save($entity) {
        if (!($entity->getId() > 0)) {
            $entity->setCreatedAt(new \DateTime());
        }
        $entity->setUpdatedAt(new \DateTime());
        
        $em = $this->getEntityManager();
        $em->persist($entity);
        $em->flush();
    
        return $entity;
    }
    
    /**
    * Finds an entity by its primary key / identifier.
    *
    * @param mixed    $id          The identifier.
    * @param int      $lockMode    The lock mode.
    * @param int|null $lockVersion The lock version.
    *
    * @return object|null The entity instance or NULL if the entity can not be found.
    */
    public function find($id, $lockMode =  LockMode::NONE, $lockVersion = null) {
        $entity = parent::find($id, $lockMode, $lockVersion);
        
        if (empty($entity)) {
            throw new NotFoundHttpException('Entity not found');
        }
        
        return $entity;
    }
}
