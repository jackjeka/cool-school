<?php
/**
 * Created by PhpStorm.
 * User: santa
 * Date: 05.12.14
 * Time: 1:59
 */

namespace CoolSchoolBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SchoolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('school')
            ->add('name')
            ->add('schoolType')
            ->add('schoolNumber')
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'school';
    }
} 