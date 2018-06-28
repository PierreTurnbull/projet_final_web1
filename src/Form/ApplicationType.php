<?php

namespace App\Form;

use App\Entity\Application;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', null, [
                'label' => 'Prénom',
                'attr' => [
                    'placeholder' => "Kevin, Jean",
                    'class' => 'contact_formulaire_input small-12'
                ]
            ])
            ->add('lastName', null, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => "Dupont, Druelle",
                    'class' => 'contact_formulaire_input small-12'
                ]
            ])
            ->add('email', null, [
                'label' => 'e-mail',
                'attr' => [
                    'placeholder' => "unemail@gmail.com",
                    'class' => 'contact_formulaire_input small-12'
                ]
            ])
            ->add('phone', null, [
                'label' => 'Numéro de téléphone',
                'attr' => [
                    'placeholder' => "00 00 00 00 00",
                    'class' => 'contact_formulaire_input small-12'
                ]
            ])
            ->add('address', null, [
                'label' => 'Adresse',
                'attr' => [
                    'placeholder' => "1 rue de l'abandon, 59900 neverland",
                    'class' => 'contact_formulaire_input small-12'
                ]
            ])
            ->add('job', null, [
                'label' => 'Poste souhaité',
                'attr' => [
                    'placeholder' => "Ingénieur",
                    'class' => 'contact_formulaire_input small-12'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Application::class,
        ]);
    }
}
