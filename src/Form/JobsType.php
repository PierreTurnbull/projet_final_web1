<?php

namespace App\Form;

use App\Entity\Jobs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('available_seats')
            ->add('category')
            ->add('salary')
            ->add('contract_type')
            ->add('contract_duration')
            ->add('rank')
            ->add('rank_description')
            ->add('prerequisite_temper')
            ->add('prerequisite_age')
            ->add('prerequisite_education')
            ->add('caracteristics_action')
            ->add('caracteristics_leadership')
            ->add('caracteristics_analytic')
            ->add('caracteristics_technophile')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Jobs::class,
        ]);
    }
}
