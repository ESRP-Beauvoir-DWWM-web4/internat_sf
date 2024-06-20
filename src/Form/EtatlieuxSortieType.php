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
                        'max' => 300,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('entreePorteSortieEtat', ChoiceType::class, [
                'choices'  => [
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"

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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                   "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    // 'Choisir état' => "choisir état",
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
