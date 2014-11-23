<?php

namespace Santa\CoolSchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchoolClass
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SchoolClass
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
     * @ORM\ManyToOne(targetEntity="School")
     */
    private $school;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalStudents", type="integer", nullable=true)
     */
    private $totalStudents;


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
     * @return SchoolClass
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
     * Set school
     *
     * @param string $school
     * @return SchoolClass
     */
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return string 
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set totalStudents
     *
     * @param integer $totalStudents
     * @return SchoolClass
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
}
