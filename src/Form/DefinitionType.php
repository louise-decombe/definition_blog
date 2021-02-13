<?php

namespace App\Form;
use App\Entity\Definitions;
use App\Entity\User;
use App\Entity\Subcategory;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class DefinitionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'nom de la définition',
                'attr' => [
                    'placeholder' => 'nom'
                ]
            ])
            ->add('subtitle', TextType::class, [
                'label' => 'sous-titre',
                'attr' => [
                    'placeholder' => 'résumé de la définition'
                ]
            
            ])
            ->add('source', TextType::class, [
                'label' => 'source',
                'attr' => [
                    'placeholder' => 'livre, site internet'
                ]
            
            ])
            ->add('description', TextareaType::class, [

                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Votre définition ici'
                ]
                       ])
            ->add('slug', TextType::class, [
                'label' => 'le slug',
                'attr' => [
                    'placeholder' => 'le slug ou url pour accéder à la définition'
                ]
            
            ])
            ->add('subcategory', EntityType::class, [
                'class' => Subcategory::class,
                'label' => 'sous-catégorie'
            ])

            ->add('submit',SubmitType::class, 
                [
                    
                    'label' => 'ajouter',
                   
            ] )

            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Definitions::class,
        ]);
    }
}

