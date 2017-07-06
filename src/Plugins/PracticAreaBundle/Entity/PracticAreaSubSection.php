<?php
// src/Plugins/ContentBundle/Entity/Content.php
namespace Plugins\PracticAreaBundle\Entity;
use AppBundle\Entity\BasePhotoEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Plugins\PracticAreaBundle\Repository\PracticAreaSubSectionRepository")

 * @ORM\Table(name="PracticAreaSubSection",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="url_uniq", columns={"url"})},
 *     indexes={@ORM\Index(name="fk_PracticAreaSubSection_practic_area_id_idx", columns={"practic_area_id"})}
 * )
 */
class PracticAreaSubSection extends BasePhotoEntity {

    protected $subfolder = 'subareas';

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \PracticArea
     *
     * @ORM\ManyToOne(targetEntity="PracticArea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="practic_area_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    protected $practicArea;

    /**
     * @ORM\Column(name="name", type="string", length=256)
     */
    protected $name;

    /**
     * @ORM\Column(name="content", type="text")
     */
    protected $content;

    /**
     * @ORM\Column(name="amp_content", type="text")
     */
    protected $ampContent;

    /**
     * @ORM\Column(name="short", type="text")
     */
    protected $short;

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
     * @return PracticAreaSubSection
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
     * Set content
     *
     * @param string $content
     * @return PracticAreaSubSection
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
     * @return PracticAreaSubSection
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
     * Set short
     *
     * @param string $short
     * @return PracticAreaSubSection
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
        if (empty($this->short)) {
            $this->short = mb_substr(strip_tags($this->content), 0, 400, "utf-8");
        }
        return $this->short;
    }

    /**
     * Set metatitle
     *
     * @param string $metatitle
     * @return PracticAreaSubSection
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
     * @return PracticAreaSubSection
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
     * @return PracticAreaSubSection
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
     * Set practicArea
     *
     * @param \Plugins\PracticAreaBundle\Entity\PracticArea $practicArea
     * @return PracticAreaSubSection
     */
    public function setPracticArea(\Plugins\PracticAreaBundle\Entity\PracticArea $practicArea = null)
    {
        $this->practicArea = $practicArea;

        return $this;
    }

    /**
     * Get practicArea
     *
     * @return \Plugins\PracticAreaBundle\Entity\PracticArea
     */
    public function getPracticArea()
    {
        return $this->practicArea;
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
