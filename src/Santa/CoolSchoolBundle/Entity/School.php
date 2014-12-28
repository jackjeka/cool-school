<?php

namespace Santa\CoolSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * School
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Santa\CoolSchoolBundle\Repository\SchoolRepository")
 */
class School
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalclasses", type="integer")
     */
    private $totalclasses;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalstudents", type="integer")
     */
    private $totalstudents;

    /**
     * @var
     *
     * @ORM\ManyToMany(targetEntity="Santa\CoolSchoolBundle\Entity\Specialization", mappedBy="schools", cascade={"persist"})
     */
    private $specializations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->specializations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return School
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
     * Set number
     *
     * @param integer $number
     * @return School
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return School
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return School
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set totalclasses
     *
     * @param integer $totalclasses
     * @return School
     */
    public function setTotalclasses($totalclasses)
    {
        $this->totalclasses = $totalclasses;

        return $this;
    }

    /**
     * Get totalclasses
     *
     * @return integer 
     */
    public function getTotalclasses()
    {
        return $this->totalclasses;
    }

    /**
     * Set totalstudents
     *
     * @param integer $totalstudents
     * @return School
     */
    public function setTotalstudents($totalstudents)
    {
        $this->totalstudents = $totalstudents;

        return $this;
    }

    /**
     * Get totalstudents
     *
     * @return integer 
     */
    public function getTotalstudents()
    {
        return $this->totalstudents;
    }

    /**
     *Set specialization
     * @param Specialization $specialization
     * @return School
     */
    public function setSpecialization(Specialization $specialization)
    {
        $specialization->setSchool($this);
        $this->specializations[] = $specialization;
    }

    /**
     * Get specializations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpecializations()
    {
        return $this->specializations;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return School
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
