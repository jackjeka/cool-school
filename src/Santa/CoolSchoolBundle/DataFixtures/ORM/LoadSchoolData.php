<?php
namespace Santa\CoolSchoolBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Santa\CoolSchoolBundle\Entity\School;

class LoadSchoolData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $school1 = new School();
        $school1
            ->setName('Гуманитарно-правовой лицей')
            ;

        $manager->persist($school1);
        $manager->flush();

        $this->addReference('school1', $school1);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}