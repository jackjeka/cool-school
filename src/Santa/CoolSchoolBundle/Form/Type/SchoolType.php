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
use Symfony\Component\OptionsResolver;
use Santa\CoolSchoolBundle\Entity\School;
use Santa\CoolSchoolBundle\Entity\Specialization;

class SchoolType extends AbstractType
{
    public $specializations;

    public function __construct(array $specializations)
    {
        $this->specializations = $specializations;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('type', 'text')
            ->add('number', 'integer')
            ->add('description', 'textarea')
            ->add('specializations', 'entity', array(
            'class' => 'Santa\CoolSchoolBundle\Entity\Specialization',
            'multiple' => true))
            ->add('totalstudents', 'hidden', array('empty_data'  => 0))
            ->add('totalclasses', 'hidden', array('empty_data'  => 0))
            ;

    }

    public function configureOptions(OptionsResolver $resolver)
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