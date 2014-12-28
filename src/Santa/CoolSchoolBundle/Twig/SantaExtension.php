<?php

namespace Santa\CoolSchoolBundle\Twig;


class SantaExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'schoolNumber' => new \Twig_Filter_Method($this, 'numberFilter'),
        );
    }

    public function numberFilter($number)
    {
        $number = number_format($number);
        $number = '№'. ' '. $number;

        return $number;
    }

    public function getName()
    {
        return 'santa_extension';
    }
} 