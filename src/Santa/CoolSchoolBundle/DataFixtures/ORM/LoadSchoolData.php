<?php
namespace Santa\CoolSchoolBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Santa\CoolSchoolBundle\Entity\School;

class LoadSchoolData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $school1 = new School();
        $school1
            ->setName('Гуманитарно-правовой лицей')
            ->setTotalClasses(1)
            ->setTotalStudents(1)
            ;

        $school2 = new School();
        $school2
            ->setName('Школа №11')
            ->setTotalClasses(10)
            ->setTotalStudents(128)
        ;

        $manager->persist($school1);
        $manager->persist($school2);
        $manager->flush();

    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}