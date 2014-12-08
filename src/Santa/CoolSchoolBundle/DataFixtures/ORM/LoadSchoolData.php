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
            ->setName('Гуманитарно правовой лицей')
            ->setNumber(1)
            ->setType('Общеобразовательная')
            ->setDescription('Отдавайте к нам своих детей - мы их не едим')
            ->setTotalclasses(1)
            ->setTotalstudents(10);
        ;

//        $school2 = new School();
//        $school2
//            ->setSchoolnumber(11)
//            ->setSchooltype('Общеобразовательная школа')
//            ->setTotalClasses(10)
//            ->setTotalStudents(128)
//            ->setDescription('Все хорошо')
//        ;

        $manager->persist($school1);
//        $manager->persist($school2);
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