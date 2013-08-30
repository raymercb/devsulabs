<?php
namespace DevsuLabs\DevsuLabsBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity
 */
class DevsuLab
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
    private $title;

    /** 
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /** 
     * @ORM\Column(type="string", nullable=false)
     */
    private $summary;

    /** 
     * @ORM\Column(type="string", nullable=true)
     */
    private $image;

    /** 
     * @ORM\ManyToOne(targetEntity="DevsuLabs\DevsuLabsBundle\Entity\Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    private $category;

    /** 
     * @ORM\ManyToOne(targetEntity="DevsuLabs\DevsuLabsBundle\Entity\Developer", inversedBy="arrDevsuLabs")
     * @ORM\JoinColumn(name="developer_id", referencedColumnName="id", nullable=false)
     */
    private $developer;

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
     * Set title
     *
     * @param string $title
     * @return DevsuLab
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return DevsuLab
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return DevsuLab
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return DevsuLab
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set category
     *
     * @param \DevsuLabs\DevsuLabsBundle\Entity\Category $category
     * @return DevsuLab
     */
    public function setCategory(\DevsuLabs\DevsuLabsBundle\Entity\Category $category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \DevsuLabs\DevsuLabsBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set developer
     *
     * @param \DevsuLabs\DevsuLabsBundle\Entity\Developer $developer
     * @return DevsuLab
     */
    public function setDeveloper(\DevsuLabs\DevsuLabsBundle\Entity\Developer $developer)
    {
        $this->developer = $developer;
    
        return $this;
    }

    /**
     * Get developer
     *
     * @return \DevsuLabs\DevsuLabsBundle\Entity\Developer 
     */
    public function getDeveloper()
    {
        return $this->developer;
    }
}