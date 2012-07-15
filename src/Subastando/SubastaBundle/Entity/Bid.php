<?php

namespace Subastando\SubastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subastando\SubastaBundle\Entity\Bid
 *
 * @ORM\Table()
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
     * @var integer $user_id
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @var integer $product_id
     *
     * @ORM\Column(name="product_id", type="integer")
     */
    private $product_id;

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
     * Set user_id
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set product_id
     *
     * @param integer $productId
     */
    public function setProductId($productId)
    {
        $this->product_id = $productId;
    }

    /**
     * Get product_id
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->product_id;
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