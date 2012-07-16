<?php

namespace Subastando\SubastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Subastando\SubastaBundle\Entity\Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product {

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
     * @ORM\Column(name="name", type="string", length=100)
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
     * @ORM\ManytoOne(targetEntity="User", inversedBy="products")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Bid", mappedBy="product")
     */
    private $bids;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set buyout
     *
     * @param integer $buyout
     */
    public function setBuyout($buyout) {
        $this->buyout = $buyout;
    }

    /**
     * Get buyout
     *
     * @return integer 
     */
    public function getBuyout() {
        return $this->buyout;
    }

    /**
     * Set minbid
     *
     * @param integer $minbid
     */
    public function setMinbid($minbid) {
        $this->minbid = $minbid;
    }

    /**
     * Get minbid
     *
     * @return integer 
     */
    public function getMinbid() {
        return $this->minbid;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get bids
     *
     * @return Collection
     */
    public function getBids() {
        return $this->bids;
    }

    /**
     * Get User
     *
     * @return Object
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set User
     *
     * @param Collection $user
     */
    public function setUser($user) {
        
        if ($user === null) {

            if ($this->user !== null) {

                $this->user->getProducts()->removeElement($this);
            }

            $this->user = null;
        } else {

            if (!$user instanceof User) {

                throw new InvalidArgumentException('$user ....');
            }

            if ($this->user !== null) {

                $this->user->getProducts()->removeElement($this);
            }

            $this->user = $user;

            $user->getProducts()->add($this);
        }
    }

    function __construct() {
        $this->bids = new ArrayCollection();
    }

}