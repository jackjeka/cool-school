<?php
namespace Santa\CoolSchoolBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
//use Santa\CoolSchoolBundle\Entity\School;
use Santa\CoolSchoolBundle\Entity\Student;

class LoadStudentData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $student = new Student();
        $student
            ->setFirstName('Vasya')
            ->setLastName('Pupkin')
            ->setSchoolClass($this->getReference('schoolClass1'))
            ->setSchool($this->getReference('school1'))
            ;

        $manager->persist($student);
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
}