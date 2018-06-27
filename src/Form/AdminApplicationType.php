<?php

namespace App\Form;

use App\Entity\Application;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rdvDate', DateType::class, [
                'label' => 'Date du rdv',
                'widget' => 'single_text',
                'data' => new \DateTime()
            ])
            ->add('rdvPlace', ChoiceType::class, [
                'label' => 'Lieu',
                'choices' => [
                    'Agen' => 'Agen',
                    'Aix en Provence' => 'Aix en Provence',
                    'Ajaccio' => 'Ajaccio',
                    'Albi' => 'Albi',
                    'Alençon' => 'Alençon',
                    'Amiens' => 'Amiens',
                    'Angoulême' => 'Angoulême',
                    'Annecy' => 'Annecy',
                    'Arras' => 'Arras',
                    'Auxerre' => 'Auxerre',
                    'Avignon' => 'Avignon',
                    'Épinal' => 'Épinal',
                    'Evreux' => 'Evreux',
                    'Orléans' => 'Orléans',
                    'Angers' => 'Angers',
                    'Bastia' => 'Bastia',
                    'Bayonne' => 'Bayonne',
                    'Belfort' => 'Belfort',
                    'Besançon' => 'Besançon',
                    'Béziers' => 'Béziers',
                    'Blois' => 'Blois',
                    'Bordeaux' => 'Bordeaux',
                    'Bourg-en-Bresse' => 'Bourg-en-Bresse',
                    'Bourges' => 'Bourges',
                    'Brest' => 'Brest',
                    'Brive' => 'Brive',
                    'Caen' => 'Caen',
                    'Cahors' => 'Cahors',
                    'Carcassonne' => 'Carcassonne',
                    'Cergy-Pontoise' => 'Cergy-Pontoise',
                    'Chambéry' => 'Chambéry',
                    'Charleville-Mézières' => 'Charleville-Mézières',
                    'Chartres' => 'Chartres',
                    'Chaumont' => 'Chaumont',
                    'Choisy-le-Roi' => 'Choisy-le-Roi',
                    'Clermont-Ferrand' => 'Clermont-Ferrand',
                    'Compiègne' => 'Compiègne',
                    'Dijon' => 'Dijon',
                    'Dunkerque' => 'Dunkerque',
                    'Evry' => 'Evry',
                    'Foix' => 'Foix',
                    'Gap' => 'Gap',
                    'Grenoble' => 'Grenoble',
                    'La Défense' => 'La Défense',
                    'La Roche sur Yon' => 'La Roche sur Yon',
                    'La Rochelle' => 'La Rochelle',
                    'Laon' => 'Laon',
                    'Laval' => 'Laval',
                    'Lille' => 'Lille',
                    'Limoges' => 'Limoges',
                    'Lorient' => 'Lorient',
                    'Lyon' => 'Lyon',
                    'Macon' => 'Macon',
                    'Mantes-la-Jolie' => 'Mantes-la-Jolie',
                    'Marseille' => 'Marseille',
                    'Massy' => 'Massy',
                    'Meaux' => 'Meaux',
                    'Melun' => 'Melun',
                    'Metz' => 'Metz',
                    'Mont de Marsan' => 'Mont de Marsan',
                    'Montauban' => 'Montauban',
                    'Montpellier' => 'Montpellier',
                    'Moulins' => 'Moulins',
                    'Mulhouse' => 'Mulhouse',
                    'Nancy' => 'Nancy',
                    'Nantes' => 'Nantes',
                    'Narbonne' => 'Narbonne',
                    'Nevers' => 'Nevers',
                    'Nice' => 'Nice',
                    'Nîmes' => 'Nîmes',
                    'Niort' => 'Niort',
                    'Paris' => 'Paris',
                    'Pau' => 'Pau',
                    'Périgueux' => 'Périgueux',
                    'Perpignan' => 'Perpignan',
                    'Poitiers' => 'Poitiers',
                    'Quimper' => 'Quimper',
                    'Reims' => 'Reims',
                    'Rennes' => 'Rennes',
                    'Rodez' => 'Rodez',
                    'Rouen' => 'Rouen',
                    'Saint Brieuc' => 'Saint Brieuc',
                    'Saint Etienne' => 'Saint Etienne',
                    'Saint Lô' => 'Saint Lô',
                    'Saint-Denis' => 'Saint-Denis',
                    'Saint-Nazaire' => 'Saint-Nazaire',
                    'Strasbourg' => 'Strasbourg',
                    'Tarbes' => 'Tarbes',
                    'Toulon' => 'Toulon',
                    'Toulouse' => 'Toulouse',
                    'Tours' => 'Tours',
                    'Troyes' => 'Troyes',
                    'Valence' => 'Valence',
                    'Valenciennes' => 'Valenciennes',
                    'Vannes' => 'Vannes',
                    'Versailles' => 'Versailles',
                    'Havre' => 'Havre',
                    'Mans' => 'Mans'
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
