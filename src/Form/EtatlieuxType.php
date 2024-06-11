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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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
                    "Neuf" => "Neuf",
                    "Bon état" => "Bon état",
                    "État d'usage" => "État d'usage",
                    "Mauvais état" => "Mauvais état"
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

