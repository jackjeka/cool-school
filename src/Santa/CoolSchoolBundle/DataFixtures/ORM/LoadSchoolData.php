<?php
namespace Santa\CoolSchoolBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;

class SchoolLoaderData extends DataFixtureLoader
{
    public function load(ObjectManager $om)
    {
    Fixtures::load(__DIR__.'/fixtures.yml', $om, array('providers' => array($this)));
    }

    public function specializationName()
    {
        $names = array(
            'Прикладное заборостроение',
            'Танцы и пляски',
            'Лепка вареников',
            'Слова из трех букв',
            'Высшая математика',
            'Основы экзистенциализма',
            'PHP для чайников',

        );

        return $names[array_rand($names)];
    }

    public function schoolTypeName()
    {
        $names = array(
            'Начальная',
            'Средняя',
            'Обычная',
            'Для особо одаренных',
            'Закрытого типа',
        );

        return $names[array_rand($names)];
    }

    protected function getFixtures()
    {
        return  array(
            __DIR__ . '/fixtures.yml',
        );
    }
}
