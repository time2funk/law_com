<?php
namespace Plugins\BlogBundle\Entity;
use AppBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Plugins\BlogBundle\Repository\BlogTopicRepository")
 
 * @ORM\Table(name="BlogTopic", 
 *     uniqueConstraints={@ORM\UniqueConstraint(name="url_uniq", columns={"url"})},
 *     indexes={@ORM\Index(name="fk_BlogTopic_blog_category_id_idx", columns={"blog_category_id"})}
 * )
 */
class BlogTopic extends BaseEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var \BlogCategory
     *
     * @ORM\ManyToOne(targetEntity="BlogCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="blog_category_id", referencedColumnName="id")
     * })
     */
    protected $blogCategory;

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
     * @ORM\OneToMany(targetEntity="BlogPost", mappedBy="blogTopic")
     **/
    protected $blogPosts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->blogPosts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return BlogTopic
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
     * @return BlogTopic
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
     * @return BlogTopic
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
     * @return BlogTopic
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
     * @return BlogTopic
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
     * Set blogCategory
     *
     * @param \Plugins\BlogBundle\Entity\BlogCategory $blogCategory
     * @return BlogTopic
     */
    public function setBlogCategory(\Plugins\BlogBundle\Entity\BlogCategory $blogCategory = null)
    {
        $this->blogCategory = $blogCategory;

        return $this;
    }

    /**
     * Get blogCategory
     *
     * @return \Plugins\BlogBundle\Entity\BlogCategory 
     */
    public function getBlogCategory()
    {
        return $this->blogCategory;
    }

    /**
     * Add blogPosts
     *
     * @param \Plugins\BlogBundle\Entity\BlogPost $blogPosts
     * @return BlogTopic
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
