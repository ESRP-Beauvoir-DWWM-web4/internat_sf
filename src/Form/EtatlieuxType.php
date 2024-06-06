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

class EtatlieuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('dateCreation', DateType::class, [
            //     'widget' => 'single_text',
            //     'label' => 'Date de création :',
            //     'format' => 'yyyy-MM-dd'
            // ])
            // ->add('nom', TextType::class, [
            //     'label' => " ",
            // ])
           

            // ->add('nom', TextareaType::class,  [
                        
            //     'constraints' => [
                
            //         new Length([
            //             'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
            //             'max' => 50,
            //         ])],
            //         'label' => " "    
            //         ])           
 
            // ->add('prenom', TextareaType::class,  [
                        
            //     'constraints' => [
                
            //         new Length([
            //             'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
            //             'max' => 50,
            //         ])],
            //         'label' => " "    
            //         ])
            // ->add('section', TextareaType::class,  [
                        
            //     'constraints' => [
                
            //         new Length([
            //             'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
            //             'max' => 50,
            //         ])],
            //         'label' => " "    
            //         ])
            // ->add('dateEntree', DateType::class, [
            //     'widget' => 'single_text',
            //     'label' => " ",
            //     'format' => 'yyyy-MM-dd'
            // ])
            ->add('entreePorteEntreeEtat', ChoiceType::class, 
            [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",   
            ])

            
            ->add('entreePorteEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('entreeSolEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('entreeSolEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('entreeMurEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " "
            ])
            ->add('entreeMurEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('entreePlafondEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " "
            ])
            ->add('entreePlafondEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreSolEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " "
            ])
            ->add('chambreSolEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreMurEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " "
            ])
            ->add('chambreMurEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambrePlafondEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambrePlafondEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreFenetresEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreFenetresEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])

            ->add('chambrePriseinterupteurEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambrePriseinterupteurEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreArmoireEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],'label' => " ",
            ])
            ->add('chambreArmoireEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreBureauEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreBureauEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreTablechevetEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreTablechevetEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
            ->add('chambreChaiseEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreChaisesEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])

            ->add('chambreLitossatureEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreLitossatureEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
      
            ->add('chambreMatelasEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreMatelasEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
        
            ->add('chambreOreillerEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreOreillerEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
    
            ->add('chambrePrisetelephoneEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambrePrisetelephoneEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
           
            ->add('chambrePriseinformatiquetvEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambrePriseinformatiquetvEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
       
            ->add('chambreLuminaireEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('chambreLuminaireEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
        
            ->add('sdbSolEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbSolEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
          
            ->add('sdbMurEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbMurEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
        
            ->add('sdbPlafondEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbPlafondEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
         
            ->add('sdbPrisesinterrupteursEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbPrisesinterrupteureEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
     
            ->add('sdbVasquelavaboEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbVasquelavaboEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
          
            ->add('sdbMiroirEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbMiroirEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
        
            ->add('sdbToilettesEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbToilettesEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
          
            ->add('sdbAbattanttoilettesEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbAbattanttoilettesEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
      
            ->add('sdbPatereEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbPatereEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
     
            ->add('sdbDoucheEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbDoucheEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
    
            ->add('sdbPardoucheEntreeEtat', ChoiceType::class, [
                'choices'  => [
                    'Bonne état' => "BE",
                    'Neuf' => "N",
                    'Etat d\'usage' => "EU",
                    'Mauvais état' => "ME"
                ],
                'label' => " ",
            ])
            ->add('sdbPardoucheEntreeCommentaire', TextareaType::class,  [
                        
                'constraints' => [
                
                    new Length([
                        'maxMessage' => 'Vous pouvez indiquer jusqu\à 50 caractères',
                        'max' => 150,
                    ])],
                    'label' => " ",
                    'required' => false    
                    ])
     

            // ->add('chambre', EntityType::class, [
            //     'class' => Chambre::class,
            //     'choice_label' => 'id',
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Etatlieux::class,
        ]);
    }
}
