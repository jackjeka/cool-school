<?php
/**
 * Created by PhpStorm.
 * User: santa
 * Date: 05.12.14
 * Time: 1:59
 */

namespace Santa\CoolSchoolBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SchoolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('type', 'text')
            ->add('number', 'integer')
            ->add('description', 'textarea')
            ->add('totalstudents', 'hidden', array('empty_data'  => 0))
            ->add('totalclasses', 'hidden', array('empty_data'  => 0))
            ;

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Santa\CoolSchoolBundle\Entity\School',
        ));
    }

    public function getName()
    {
        return 'School';
    }
} 