<?php

namespace Santa\CoolSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialization
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Santa\CoolSchoolBundle\Repository\SpecializationRepository")
 */
class Specialization
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
     * @var
     *
     * @ORM\ManyToMany(targetEntity="Santa\CoolSchoolBundle\Entity\School", inversedBy="specializations", cascade={"persist"})
     */
    private $schools;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schools = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Specialization
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
     * Set School
     * @param School $school
     * @return Specialization
     */
    public function setSchool(School $school)
    {
        $this->schools[] = $school;
    }

    /**
     * Get schools
     *
     * @return array 
     */
    public function getSchools()
    {
        return $this->schools;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
