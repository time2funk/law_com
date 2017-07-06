<?php
// src/AppBundle/Entity/Quote.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuoteRepository")
 
 * @ORM\Table(name="Quote")
 */
class Quote extends BaseEntity {

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
     * @ORM\Column(name="quote", type="string", length=500)
     */
    protected $quote;
    
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
     * @return Quote
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
     * Get name with span for $first letter
     *
     * @return string
     */
    public function getNameS()
    {
        return $this->firstLetterWithSpan($this->name);
    }

    /**
     * Set quote
     *
     * @param string $quote
     * @return Quote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return string 
     */
    public function getQuote()
    {
        return $this->quote;
    }
    
    /**
     * Get name with span for $first letter
     *
     * @return string 
     */
    public function getQuoteS()
    {
        return $this->firstLetterWithSpan($this->quote);
    }
}
