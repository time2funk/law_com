<?php
// src/AppBundle/Entity/BaseEntity.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class BaseEntity {

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updated_at;

    public function getCreatedFormat() {
        return $this->getCreatedAt()->format('d.m.Y H:i:s');
    }

    public function getUpdatedFormat() {
        return $this->getCreatedAt()->format('d.m.Y H:i:s');
    }

    public function getUpdatedAtDatetime() {
        return $this->getCreatedAt()->format('Y-m-d H:i:s');
    }

    public function getCreatedAtDatetime() {
        return $this->getCreatedAt()->format('Y-m-d H:i:s');
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Interest
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }


    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Interest
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add span to first letter of $string
     * @param unknown_type $string
     */
    protected function firstLetterWithSpan($string) {
        $first = substr($string, 0, 1);

        return '<span>' . $first . '</span>' . substr($string, 1);
    }

    /**
     * Return url by $str
     *
     * @param string $str
     * @return string
     */
    public function cleanUrl($str) {
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", '-', $clean);

        $clean = substr($clean, 0, 100);

        return $clean;
    }
    // public function findEntitiesByString($str){
    //     return $this->getEntityManager()
    //         ->createQuery(
    //             'SELECT e
    //             FROM AppBundle:News n
    //             WHERE n.name LIKE :str'
    //         )
    //         ->setParameter('str', '%'.$str.'%')
    //         ->getResult();
    // }
}
