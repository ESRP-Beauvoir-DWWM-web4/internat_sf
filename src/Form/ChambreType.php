<?php

namespace App\Form;

use App\Entity\Chambre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numero')
            // ->add('dateEntree', null, [
            //     'widget' => 'single_text',
            // ])
            ->add('capacite_lit', ChoiceType::class, [
                'choices' => [
                    'Simple' => 1,
                    'Double' => 2,
                ],
            ])
            ->add('batiment', ChoiceType::class, [
                'choices' => [
                    'A' => 'A',
                    'B' => 'B',
                    'C' => 'C',
                ],
            ])
            ->add('etage', ChoiceType::class, [
                'choices' => [
                    '0' => 1,
                    '1' => 2,
                    '2' => 3,
                ],
            ])
        
            // ->add('statut', ChoiceType::class, [
            //     'choices' => [
            //         'Occupé' => true,
            //         'vide' => false,
            //     ],
            // ])
            // ->add('soutirageEau', DateType::class, [
            //     'widget' => 'single_text',
            //     'format' => 'yyyy-MM-dd',
            // ])
            ->add('amenagement', ChoiceType::class, [
                'choices' => [
                    'PMR' => true,
                    'vide' => false,
                ],
            ])
            ;
            

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
