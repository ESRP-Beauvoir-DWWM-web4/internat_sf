<?php

namespace App\Form;

use App\Entity\Chambre;
use App\Entity\Etatlieux;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EtatlieuxSortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // $readonly = $options['readonly'];

        $builder
            ->add('dateSortie', DateType::class, [
                'widget' => 'single_text',
                'label' => " "
            ])
            ->add('heuresMenage', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 50,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('montantMenageGlobal', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 50,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('adresseSortie', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 50,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('observation', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 50,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('entreePorteSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"

                ],
                'label' => " ",
                'attr' => ['readonly'=>true]
            ])
            ->add('entreePorteSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('entreeSolSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " "
            ])
            ->add('entreeSolSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('entreeMurSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " "
            ])
            ->add('entreeMurSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('entreePlafondSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " "
            ])
            ->add('entreePlafondSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreSolSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " "
            ])
            ->add('chambreSolSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreMurSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " "
            ])
            ->add('chambreMurSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambrePlafondSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambrePlafondSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreFenetresSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreFenetresSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambrePriseinterupteurSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],'label' => " ",
            ])
            ->add('chambrePriseinterupteurSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreArmoireSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreArmoireSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreBureauSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreBureauSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreTablechevetSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreTablechevetSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreChaisesSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreChaisesSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreLitossatureSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreLitossatureSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreMatelasSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreMatelasSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreOreillerSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreOreillerSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambrePrisetelephoneSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambrePrisetelephoneSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambrePriseinformatiquetvSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambrePriseinformatiquetvSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreLuminaireSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreLuminaireSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbSolSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbSolSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbMurSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbMurSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbPlafondSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbPlafondSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbPrisesinterrupteursSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbPrisesinterrupteursSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbVasquelavaboSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbVasquelavaboSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbMiroirSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbMiroirSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbToilettesSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbToilettesSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbAbattanttoilettesSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbAbattanttoilettesSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbPatereSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbPatereSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbDoucheSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbDoucheSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('sdbPardoucheSortieEtat', ChoiceType::class, [
                'choices'  => [
                    'Choisir état' => "choisir état",
                    'Bonne etat' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbPardoucheSortieCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Etatlieux::class,
        ]);
    }
}
