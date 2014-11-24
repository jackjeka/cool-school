<?php
namespace Santa\CoolSchoolBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
//use Santa\CoolSchoolBundle\Entity\School;
use Santa\CoolSchoolBundle\Entity\SchoolClass;

class LoadSchoolClassData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $schoolClass1 = new SchoolClass();
        $schoolClass1
            ->setName('11-A')
            ->setSchool($this->getReference('school1'))
            ;

        $manager->persist($schoolClass1);
        $manager->flush();

        $this->addReference('schoolClass1', $schoolClass1);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }
}