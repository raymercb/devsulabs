<?php
namespace DevsuLabs\DevsuLabsBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/** 
 * @ORM\Entity
 */
class Developer implements UserInterface
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $name;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $email;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $password;

    /** 
     * @ORM\OneToMany(targetEntity="DevsuLabs\DevsuLabsBundle\Entity\DevsuLab", mappedBy="developer")
     */
    private $arrDevsuLabs;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->arrDevsuLabs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return Developer
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
     * Set email
     *
     * @param string $email
     * @return Developer
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
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
     * Set password
     *
     * @param string $password
     * @return Developer
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
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
     * Add arrDevsuLabs
     *
     * @param \DevsuLabs\DevsuLabsBundle\Entity\DevsuLab $arrDevsuLabs
     * @return Developer
     */
    public function addArrDevsuLab(\DevsuLabs\DevsuLabsBundle\Entity\DevsuLab $arrDevsuLabs)
    {
        $this->arrDevsuLabs[] = $arrDevsuLabs;
    
        return $this;
    }

    /**
     * Remove arrDevsuLabs
     *
     * @param \DevsuLabs\DevsuLabsBundle\Entity\DevsuLab $arrDevsuLabs
     */
    public function removeArrDevsuLab(\DevsuLabs\DevsuLabsBundle\Entity\DevsuLab $arrDevsuLabs)
    {
        $this->arrDevsuLabs->removeElement($arrDevsuLabs);
    }

    /**
     * Get arrDevsuLabs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArrDevsuLabs()
    {
        return $this->arrDevsuLabs;
    }
    
    //****** Securtity methods ******
    
    function getUsername()
    {
    	return $this->email;
    }
    
    function getSalt()
    {
    	return false;
    }
    
    function getRoles()
    {
    	return array('ROLE_USER');
    }
    
    function eraseCredentials()
    {
    	return false;
    }
}