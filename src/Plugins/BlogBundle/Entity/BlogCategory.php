<?php
namespace Plugins\BlogBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Plugins\BlogBundle\Repository\BlogCategoryRepository")
 
 * @ORM\Table(name="BlogCategory", uniqueConstraints={@ORM\UniqueConstraint(name="url_uniq", columns={"url"})}) })
 */
class BlogCategory extends BaseEntity {

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
     * @ORM\Column(name="url", type="string", length=255)
     */
    protected $url;
    
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
     * @ORM\OneToMany(targetEntity="BlogTopic", mappedBy="blogCategory")
     **/
    protected $blogTopics;
    
    /**
     * @ORM\OneToMany(targetEntity="BlogPost", mappedBy="blogCategory")
     * @ORM\OrderBy({"created_at" = "DESC"})
     **/
    protected $blogPosts;
    
    public function __construct() {
        $this->blogTopics = new ArrayCollection();
        $this->blogPosts = new ArrayCollection();
    }
    
    public function __toString() {
        return $this->getName();
    }

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
     * Set name
     *
     * @param string $name
     * @return BlogCategory
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

    /**
     * Set url
     *
     * @param string $url
     * @return BlogCategory
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set metatitle
     *
     * @param string $metatitle
     * @return BlogCategory
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
        return $this->metatitle;
    }

    /**
     * Set metadescription
     *
     * @param string $metadescription
     * @return BlogCategory
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
        return $this->metadescription;
    }

    /**
     * Set metakeywords
     *
     * @param string $metakeywords
     * @return BlogCategory
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
        return $this->metakeywords;
    }

    /**
     * Add blogTopics
     *
     * @param \Plugins\BlogBundle\Entity\BlogTopic $blogTopics
     * @return BlogCategory
     */
    public function addBlogTopic(\Plugins\BlogBundle\Entity\BlogTopic $blogTopics)
    {
        $this->blogTopics[] = $blogTopics;

        return $this;
    }

    /**
     * Remove blogTopics
     *
     * @param \Plugins\BlogBundle\Entity\BlogTopic $blogTopics
     */
    public function removeBlogTopic(\Plugins\BlogBundle\Entity\BlogTopic $blogTopics)
    {
        $this->blogTopics->removeElement($blogTopics);
    }

    /**
     * Get blogTopics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlogTopics()
    {
        return $this->blogTopics;
    }

    /**
     * Add blogPosts
     *
     * @param \Plugins\BlogBundle\Entity\BlogPost $blogPosts
     * @return BlogCategory
     */
    public function addBlogPost(\Plugins\BlogBundle\Entity\BlogPost $blogPosts)
    {
        $this->blogPosts[] = $blogPosts;

        return $this;
    }

    /**
     * Remove blogPosts
     *
     * @param \Plugins\BlogBundle\Entity\BlogPost $blogPosts
     */
    public function removeBlogPost(\Plugins\BlogBundle\Entity\BlogPost $blogPosts)
    {
        $this->blogPosts->removeElement($blogPosts);
    }

    /**
     * Get blogPosts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlogPosts()
    {
        return $this->blogPosts;
    }
}
