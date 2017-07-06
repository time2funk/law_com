<?php
// src/Plugins/NewsBundle/Entity/News.php
namespace Plugins\NewsBundle\Entity;
use AppBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Plugins\NewsBundle\Repository\NewsRepository")

 * @ORM\Table(name="News", uniqueConstraints={@ORM\UniqueConstraint(name="url_uniq", columns={"url"})})
 */
class News extends BaseEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=500)
     */
    protected $name;

    /**
     * @ORM\Column(name="short", type="text")
     */
    protected $short;

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
     * @ORM\Column(name="public_at", type="datetime")
     */
    protected $public_at;

    /**
     * @ORM\Column(name="url", type="string", length=255)
     */
    protected $url;

    public function getShortSimpleText() {
        $short = strip_tags($this->getShort());

        return $short;
    }

    public function getDateUsFormat() {
        return $this->getPublicAt()->format('dS F Y - h:i A');
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
     * Set short
     *
     * @param string $short
     * @return News
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
     * Set content
     *
     * @param string $content
     * @return News
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
     * @return News
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
     * @return News
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
     * @return News
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
     * Set name
     *
     * @param string $name
     * @return News
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
     * Set public_at
     *
     * @param \DateTime $publicAt
     * @return News
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
     * Set url
     *
     * @param string $url
     * @return News
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
}
