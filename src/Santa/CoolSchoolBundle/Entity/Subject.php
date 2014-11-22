<?php

namespace Santa\CoolSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Subject
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
     * @ORM\ManyToOne(targetEntity="Santa\CoolSchoolBundle\Entity\Teacher", inversedBy="subject")
     */
    private $teachers;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Santa\CoolSchoolBundle\Entity\School", inversedBy="subject")
     */
    private $school;


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
     * @return Subject
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
     * Set teachers
     *
     * @param string $teachers
     * @return Subject
     */
    public function setTeachers($teachers)
    {
        $this->teachers = $teachers;

        return $this;
    }

    /**
     * Get teachers
     *
     * @return string
     */
    public function getTeachers()
    {
        return $this->teachers;
    }

    /**
     * Set schools
     *
     * @param string $schools
     * @return Subject
     */
    public function setSchools($schools)
    {
        $this->teachers = $schools;

        return $this;
    }

    /**
     * Get schools
     *
     * @return string
     */
    public function getSchools()
    {
        return $this->schools;
    }
}
