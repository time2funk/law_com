<?php
// src/Plugins/ContentBundle/Entity/Content.php
namespace Plugins\PracticAreaBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\BasePhotoEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Plugins\PracticAreaBundle\Repository\PracticAreaRepository")

 * @ORM\Table(name="PracticArea", uniqueConstraints={@ORM\UniqueConstraint(name="url_uniq", columns={"url"})}) })
 */
class PracticArea extends BasePhotoEntity {

		protected $subfolder = 'areas';

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
     * @ORM\Column(name="short", type="text")
     */
    protected $short;

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
     * @ORM\OneToMany(targetEntity="PracticAreaSubSection", mappedBy="practicArea")
     **/
    protected $practicAreaSubSections;

    public function __construct() {
        $this->practicAreaSubSections = new ArrayCollection();
    }

    public function getAreaId() {
        return str_replace(' ', '-', strtolower($this->name));
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
     * @return PracticArea
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
     * @return PracticArea
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
     * @return PracticArea
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
     * Set metatitle
     *
     * @param string $metatitle
     * @return PracticArea
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
     * @return PracticArea
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
     * @return PracticArea
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
     * Set url
     *
     * @param string $url
     * @return PracticArea
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
     * Set practicAreaSubSections
     *
     * @param string $practicAreaSubSections
     * @return PracticArea
     */
    public function setPracticAreaSubSections($practicAreaSubSections)
    {
        $this->practicAreaSubSections = $practicAreaSubSections;

        return $this;
    }

    /**
     * Get practicAreaSubSections
     *
     * @return string
     */
    public function getPracticAreaSubSections()
    {
        return $this->practicAreaSubSections;
    }


}
