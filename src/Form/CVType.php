<?php

namespace App\Form;

use App\Entity\CV;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;

class CVType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom',
                ]
            ])
            ->add('prenom'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Prenom',
                ]
            ])
            ->add('age'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Age',
                ]
            ])
            ->add('adresse'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Adresse',
                ]
            ])
            ->add('email'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email',
                ]
            ])
            ->add('specialite'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Specialité',
                    
                ]
            ])
            ->add('niveauetude'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Niveau Etude',
                ]
            ])
            ->add('ExperienceProfessionnelle'
            ,TextType::class,
            [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Experience(s) Professionnelle(s)',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CV::class,
        ]);
    }
}
