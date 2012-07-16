<?php

namespace Subastando\SubastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subastando\SubastaBundle\Entity\Bid
 *
 * @ORM\Table(name="bid")
 * @ORM\Entity
 */
class Bid
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
     *
     * @ORM\ManytoOne(targetEntity="User", inversedBy="bids")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     *
     * @ORM\ManytoOne(targetEntity="Product", inversedBy="bids")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @var integer $value
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;


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
     * Set user
     *
     * @param collection $user
     */
    public function setUser($user)
    {
        
        if ($user === null) {

            if ($this->user !== null) {

                $this->user->getBids->removeElement($this);
            }

            $this->user = null;
        } else {

            if (!$user instanceof User) {

                throw new InvalidArgumentException('$user ....');
            }

            if ($this->user !== null) {

                $this->user->getBids()->removeElement($this);
            }

            $this->user = $user;

            $user->getBids()->add($this);
        }
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
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

                $this->product->getBids()->removeElement($this);
            }

            $this->product = null;
        } else {

            if (!$product instanceof Product) {

                throw new InvalidArgumentException('$product ....');
            }

            if ($this->product !== null) {

                $this->product->getBids->removeElement($this);
            }

            $this->Product = $product;

            $product->getBids()->add($this);
        }
    }

    /**
     * Get product
     *
     * @return integer 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set value
     *
     * @param integer $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }
    
    
    
}