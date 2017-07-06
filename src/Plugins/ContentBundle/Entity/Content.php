<?php
// src/Plugins/ContentBundle/Entity/Content.php
namespace Plugins\ContentBundle\Entity;
use AppBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Plugins\ContentBundle\Repository\ContentRepository")

 * @ORM\Table(name="Content", uniqueConstraints={@ORM\UniqueConstraint(name="key_uniq", columns={"key"}) })
 */
class Content extends BaseEntity {

    const CONTENT_META_HOME_PAGE = 'meta_home_page';
    const CONTENT_META_CONTACT_PAGE = 'meta_contact_page';
    const CONTENT_META_ABOUT_US_PAGE = 'meta_about_us_page';
    const CONTENT_META_NEWS_PAGE = 'meta_news_page';
    const CONTENT_PRACTIC_AREAS_HOMEPAGE = 'practic_areas_homepage';
    const CONTENT_PRACTIC_AREAS_HOMEPAGE_AMP = 'practic_areas_homepage_amp';
    const CONTENT_BLOG_HOMEPAGE = 'blog_homepage';

    const CONTENT_WHY_US = 'why_us';
    const CONTENT_WHY_US_CONTACTS = 'why_us_contacts';
    const CONTENT_CLIENT_SERVICE = 'client_service';

    const BAR_ASSOCIATION_BLOCK = 'bar_association_block';

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=256)
     */
    protected $name;

    /**
     * @ORM\Column(name="`key`", type="string", length=128)
     */
    protected $key;

    /**
     * @ORM\Column(name="content", type="text")
     */
    protected $content;

    /**
     * @ORM\Column(name="metatitle", type="text", nullable=true)
     */
    protected $metatitle;

    /**
     * @ORM\Column(name="metadescription", type="text", nullable=true)
     */
    protected $metadescription;

    /**
     * @ORM\Column(name="metakeywords", type="text", nullable=true)
     */
    protected $metakeywords;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return Content
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Content
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set metatitle
     *
     * @param string $metatitle
     * @return Content
     */
    public function setMetatitle($metatitle)
    {
        $this->metatitle = $metatitle;

        return $this;
    }

    /**
     * Get metatitle
     *
     * @return string
     */
    public function getMetatitle()
    {
        return str_replace(array("\n","\r"), ' ', $this->metatitle);
    }

    /**
     * Set metadescription
     *
     * @param string $metadescription
     * @return Content
     */
    public function setMetadescription($metadescription)
    {
        $this->metadescription = $metadescription;

        return $this;
    }

    /**
     * Get metadescription
     *
     * @return string
     */
    public function getMetadescription()
    {
        return str_replace(array("\n","\r"), ' ', $this->metadescription);
    }

    /**
     * Set metakeywords
     *
     * @param string $metakeywords
     * @return Content
     */
    public function setMetakeywords($metakeywords)
    {
        $this->metakeywords = $metakeywords;

        return $this;
    }

    /**
     * Get metakeywords
     *
     * @return string
     */
    public function getMetakeywords()
    {
        return str_replace(array("\n","\r"), ' ', $this->metakeywords);
    }

    /**
     * Set update_at
     *
     * @param \DateTime $updateAt
     * @return Content
     */
    public function setUpdateAt($updateAt)
    {
        $this->update_at = $updateAt;

        return $this;
    }

    /**
     * Get update_at
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Content
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
