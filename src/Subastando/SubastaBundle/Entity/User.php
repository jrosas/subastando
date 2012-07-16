<?php

namespace Subastando\SubastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Subastando\SubastaBundle\Entity\User
 *
 * @ORM\Table(name="sub_user")
 * @ORM\Entity(repositoryClass="Subastando\SubastaBundle\Entity\UserRepository")

 */
class User implements UserInterface {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $f_name
     *
     * @ORM\Column(name="f_name", type="string", length=25)
     */
    private $f_name;

    /**
     * @var string $l_name
     *
     * @ORM\Column(name="l_name", type="string", length=25)
     */
    private $l_name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=32, unique=true)
     */
    private $username;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=32)
     */
    private $salt;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=40)
     */
    private $password;

    /**
     * @var string $roles
     *
     * @ORM\Column(name="roles", type="string", length=40)
     */
    private $roles;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Bid", mappedBy="user")
     */
    private $bids;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Product", mappedBy="user")
     */
    private $products;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set f_name
     *
     * @param string $fName
     */
    public function setFName($fName) {
        $this->f_name = $fName;
    }

    /**
     * Get f_name
     *
     * @return string 
     */
    public function getFName() {
        return $this->f_name;
    }

    /**
     * Set l_name
     *
     * @param string $lName
     */
    public function setLName($lName) {
        $this->l_name = $lName;
    }

    /**
     * Get l_name
     *
     * @return string 
     */
    public function getLName() {
        return $this->l_name;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt) {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set role
     *
     * @param string $role
     */
    public function setRole($role) {
        $this->role = $role;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRoles() {
        return $this->roles;
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
     * Get bids
     *
     * @return Collection
     */
    public function getProducts() {
        return $this->Products;
    }
   
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        
    }

    /**
     * @inheritDoc
     */
    public function equals(UserInterface $user) {
        return $this->username === $user->getUsername();
    }
    
    function __construct() {
        $this->bids = new ArrayCollection();
        $this->products = new ArrayCollection();
    }
}