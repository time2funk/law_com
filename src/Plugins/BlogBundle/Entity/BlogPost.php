<?php
namespace Plugins\BlogBundle\Entity;

use AppBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Plugins\BlogBundle\Repository\BlogPostRepository")
 * @ORM\Table(name="BlogPost",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="url_uniq", columns={"url"})},
 *     indexes={@ORM\Index(name="fk_BlogPost_blog_category_id_idx", columns={"blog_category_id"})},
 *     indexes={@ORM\Index(name="fk_BlogPost_blog_topic_id_idx", columns={"blog_topic_id"})}
 * )
 */
class BlogPost extends BaseEntity
{

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var BlogCategory
     *
     * @ORM\ManyToOne(targetEntity="BlogCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="blog_category_id", referencedColumnName="id")
     * })
     */
    protected $blogCategory;

    /**
     * @var BlogTopic
     *
     * @ORM\ManyToOne(targetEntity="BlogTopic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="blog_topic_id", referencedColumnName="id")
     * })
     */
    protected $blogTopic;

    /**
     * @ORM\Column(name="name", type="string", length=256)
     */
    protected $name;

    /**
     * @ORM\Column(name="short", type="text")
     */
    protected $short;

    /**
     * @ORM\Column(name="short_home", type="text")
     */
    protected $short_home;

    /**
     * @ORM\Column(name="content", type="text")
     */
    protected $content;

    /**
		* @ORM\Column(name="amp_content", type="text")
		*/
		 protected $ampContent;

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
     * @ORM\Column(name="is_popular", type="boolean", nullable=true)
     */
    protected $is_popular;

    /**
     * @ORM\Column(name="public_at", type="datetime")
     */
    protected $public_at;

    protected $public_at_with_random_time;

    /**
     * @return string
     */
    public function getDateUsFormat()
    {
        return $this->getPublicAt()->format('dS F Y - h:i A');
    }

    /**
     * @return string
     */
    public function getCreatedUsFormat()
    {
        return $this->getCreatedAt()->format('dS F Y - h:i A');
    }

    /**
     * @return bool
     */
    public function isShown()
    {
        return $this->getPublicAt() <= (new \DateTime());
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
     * @return BlogPost
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
     * Set short
     *
     * @param string $short
     * @return BlogPost
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }

    /**
     * Get short
     *
     * @return string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set short_home
     *
     * @param string $shortHome
     * @return BlogPost
     */
    public function setShortHome($shortHome)
    {
        $this->short_home = $shortHome;
    }

    /**
     * Get short_home
     *
     * @return string
     */
    public function getShorthome()
    {
        return $this->short_home;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return BlogPost
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
     * Set content
     *
     * @param string $ampContent
     * @return PracticArea
     */
    public function setAmpContent($ampContent)
    {
        $this->ampContent = $ampContent;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */ 
    public function getAmpContent()
    {
        return $this->ampContent;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return BlogPost
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
     * @return BlogPost
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
     * @return BlogPost
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
     * @return BlogPost
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
     * @return BlogPost
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
     * Set blogTopic
     *
     * @param \Plugins\BlogBundle\Entity\BlogTopic $blogTopic
     * @return BlogPost
     */
    public function setBlogTopic(\Plugins\BlogBundle\Entity\BlogTopic $blogTopic = null)
    {
        $this->blogTopic = $blogTopic;

        return $this;
    }

    /**
     * Get blogTopic
     *
     * @return \Plugins\BlogBundle\Entity\BlogTopic
     */
    public function getBlogTopic()
    {
        return $this->blogTopic;
    }

    /**
     * Set is_popular
     *
     * @param boolean $isPopular
     * @return BlogPost
     */
    public function setIsPopular($isPopular)
    {
        $this->is_popular = $isPopular;

        return $this;
    }

    /**
     * Get is_popular
     *
     * @return boolean
     */
    public function getIsPopular()
    {
        return $this->is_popular;
    }

    /**
     * Set public_at
     *
     * @param \DateTime $publicAt
     * @return BlogPost
     */
    public function setPublicAt($publicAt)
    {
        $this->public_at = $publicAt;

        return $this;
    }

    /**
     * Get public_at
     *
     * @return \DateTime
     */
    public function getPublicAt()
    {
        return empty($this->public_at) ? new \DateTime() : $this->public_at;
    }

    /**
     * @param \DateTime $publicAtWithRandomTime
     * @return $this
     */
    public function setPublicAtWithRandomTime($publicAtWithRandomTime) {
        $this->public_at_with_random_time = $publicAtWithRandomTime;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublicAtWithRandomTime() {
        return $this->public_at_with_random_time;
    }
}
