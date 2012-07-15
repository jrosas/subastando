<?php

namespace Subastando\SubastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subastando\SubastaBundle\Entity\Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer $buyout
     *
     * @ORM\Column(name="buyout", type="integer")
     */
    private $buyout;

    /**
     * @var integer $minbid
     *
     * @ORM\Column(name="minbid", type="integer")
     */
    private $minbid;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set buyout
     *
     * @param integer $buyout
     */
    public function setBuyout($buyout)
    {
        $this->buyout = $buyout;
    }

    /**
     * Get buyout
     *
     * @return integer 
     */
    public function getBuyout()
    {
        return $this->buyout;
    }

    /**
     * Set minbid
     *
     * @param integer $minbid
     */
    public function setMinbid($minbid)
    {
        $this->minbid = $minbid;
    }

    /**
     * Get minbid
     *
     * @return integer 
     */
    public function getMinbid()
    {
        return $this->minbid;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }
}