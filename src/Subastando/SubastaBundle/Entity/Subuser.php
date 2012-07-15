<?php

namespace Subastando\SubastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subastando\SubastaBundle\Entity\Subuser
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Subuser
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
     * @var string $f_name
     *
     * @ORM\Column(name="f_name", type="string", length=255)
     */
    private $f_name;

    /**
     * @var string $l_name
     *
     * @ORM\Column(name="l_name", type="string", length=255)
     */
    private $l_name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string $role
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;


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
     * Set f_name
     *
     * @param string $fName
     */
    public function setFName($fName)
    {
        $this->f_name = $fName;
    }

    /**
     * Get f_name
     *
     * @return string 
     */
    public function getFName()
    {
        return $this->f_name;
    }

    /**
     * Set l_name
     *
     * @param string $lName
     */
    public function setLName($lName)
    {
        $this->l_name = $lName;
    }

    /**
     * Get l_name
     *
     * @return string 
     */
    public function getLName()
    {
        return $this->l_name;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set role
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
}