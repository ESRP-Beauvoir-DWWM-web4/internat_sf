<?php

namespace App\Form;

use DateTime;
use App\Entity\Chambre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ChambreOccupantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('numero')
            ->add('dateEntree', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('section')
            ->add('nom')
            ->add('prenom')
            ->add('handicap')
            // ->add('capacite_lit')
            // ->add('batiment')
            // ->add('etage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
