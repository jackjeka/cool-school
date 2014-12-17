<?php
/**
 * Created by PhpStorm.
 * User: santa
 * Date: 02.12.14
 * Time: 17:42
 */

namespace CoolSchoolBundle\Twig;


class SantaExtension extends Twig_Extension {
    public function getFilters()
    {
        return array(
            new Twig_SimpleFilter('number'),
        );
    }

    public function numberFilter($integer)
    {
        $number = number_format($integer, $space = ' ');
        $number = '№'. $number;

        return $number;
    }

    public function getName()
    {
        return 'santa_extension';
    }
} 