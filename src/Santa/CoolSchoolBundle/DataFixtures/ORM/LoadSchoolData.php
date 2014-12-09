<?php
namespace Santa\CoolSchoolBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Santa\CoolSchoolBundle\Entity\School;
use Santa\CoolSchoolBundle\Entity\Specialization;

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

        $spec1 = new Specialization();
        $spec1
            ->setName('Ничего особенного')
        ;

        $spec2 = new Specialization();
        $spec2
            ->setName('Прикладное заборостроение')
        ;

        $manager->persist($school1);
        $manager->persist($spec1);
        $manager->persist($spec2);
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