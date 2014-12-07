<?php

namespace Santa\CoolSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * School
 *
 * @ORM\Table()
 * @ORM\Entity
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="schoolnumber", type="integer", nullable=true)
     */
    private $schoolnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="schooltype", type="string", length=255, nullable=true)
     */
    private $schooltype;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalStudents", type="integer", nullable=true)
     */
    private $totalStudents;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalClasses", type="integer", nullable=true)
     */
    private $totalClasses;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=255, nullable=true)
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

    /**
     * Set totalStudents
     *
     * @param integer $totalStudents
     * @return School
     */
    public function setTotalStudents($totalStudents)
    {
        $this->totalStudents = $totalStudents;

        return $this;
    }

    /**
     * Get totalStudents
     *
     * @return integer
     */
    public function getTotalStudents()
    {
        return $this->totalStudents;
    }

    /**
     * Set totalClasses
     *
     * @param integer $totalClasses
     * @return School
     */
    public function setTotalClasses($totalClasses)
    {
        $this->totalClasses = $totalClasses;

        return $this;
    }

    /**
     * Get totalClasses
     *
     * @return integer
     */
    public function getTotalClasses()
    {
        return $this->totalClasses;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return School
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
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
     * Set schoolnumber
     *
     * @param integer $schoolnumber
     * @return School
     */
    public function setSchoolnumber($schoolnumber)
    {
        $this->schoolnumber = $schoolnumber;

        return $this;
    }

    /**
     * Get schoolnumber
     *
     * @return integer 
     */
    public function getSchoolnumber()
    {
        return $this->schoolnumber;
    }

    /**
     * Set schooltype
     *
     * @param string $schooltype
     * @return School
     */
    public function setSchooltype($schooltype)
    {
        $this->schooltype = $schooltype;

        return $this;
    }

    /**
     * Get schooltype
     *
     * @return string 
     */
    public function getSchooltype()
    {
        return $this->schooltype;
    }
}
