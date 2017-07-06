<?php
// src/AppBundle/Entity/Quote.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AttorneyRepository")
 
 * @ORM\Table(name="Attorney")
 */
class Attorney extends BasePhotoEntity {

    const UPLOAD_DIR_NAME = 'uploads';
    
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;
    
    /**
     * @ORM\Column(name="specialty", type="text")
     */
    protected $specialty;
    
    /**
     * @ORM\Column(name="description", type="text")
     */
    protected $description;
    
    /**
     * @ORM\Column(name="url", type="string", length=255)
     */
    protected $url;

    /**
     * @ORM\Column(name="stage", type="string", length=255)
     */
    protected $stage;

    /**
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    protected $phone;

    /**
     * @ORM\Column(name="specializations", type="text")
     */
    protected $specializations;
    
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
     * @ORM\Column(name="is_default", type="boolean", nullable=true)
     */
    protected $isDefault;
    
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
     * @return Attorney
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
     * Set specialty
     *
     * @param string $specialty
     * @return Attorney
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * Get specialty
     *
     * @return string 
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Attorney
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Attorney
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
     * @return Attorney
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
     * @return Attorney
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
     * @return Attorney
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
     * Set isDefault
     *
     * @param $isDefault
     * @return Attorney
     * @internal param string $sDefault
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
    
        return $this;
    }
    
    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }


    /**
     * @return mixed
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param mixed $stage
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpecializations()
    {
        return $this->specializations;
    }


    /**
     * @return mixed
     */
    public function getSpecializationsList()
    {
        return explode(',', $this->specializations);
    }

    /**
     * @param mixed $specializations
     * @return $this
     */
    public function setSpecializations($specializations)
    {
        $this->specializations = $specializations;
        return $this;
    }
}
