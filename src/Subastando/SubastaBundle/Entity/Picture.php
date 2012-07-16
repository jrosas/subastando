<?php

namespace Subastando\SubastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Subastando\SubastaBundle\Entity\Picture
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Picture
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
     * @var string $path
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;
    
    /**
     *
     * @ORM\ManytoOne(targetEntity="Product", inversedBy="pictures")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

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
     * Set path
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
    
    /**
     * Set product
     *
     * @param Collection $product
     */
    public function setProduct($product)
    {
        
        if ($product === null) {

            if ($this->product !== null) {

                $this->product->getPictures()->removeElement($this);
            }

            $this->product = null;
        } else {

            if (!$product instanceof Product) {

                throw new InvalidArgumentException('$product ....');
            }

            if ($this->product !== null) {

                $this->product->getPictures->removeElement($this);
            }

            $this->Product = $product;

            $product->getPictues()->add($this);
        }
    }

    /**
     * Get product
     *
     * @return product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}