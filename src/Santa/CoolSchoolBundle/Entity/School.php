<?php

namespace Santa\CoolSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var
     *
     * @ORM\OneToMany (targetEntity="Santa\CoolSchoolBundle\Entity\Teacher", mappedBy="school")
     */
    private $teachers;

    /**
     * @var
     *
     * @ORM\OneToMany (targetEntity="Santa\CoolSchoolBundle\Entity\Subject", mappedBy="school")
     */
    private $subjects;


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
     * Set teachers
     *
     * @param string $teachers
     * @return School
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
     * Set subjects
     *
     * @param string $subjects
     * @return School
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;

        return $this;
    }

    /**
     * Get subjects
     *
     * @return string 
     */
    public function getSubjects()
    {
        return $this->subjects;
    }
}
