<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('lastName', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',
            ],
            'label' => 'Nom',
            'label_attr' => [
                'class' => 'form-label mt-3'
            ],
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Length(['min' => 2, 'max' => 50])
                ]
        ])
        ->add('firstName', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',
            ],
            'label' => 'Prénom',
            'label_attr' => [
                'class' => 'form-label mt-3'
            ],
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Length(['min' => 2, 'max' => 50])
                ]
        ])
        ->add('address', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '255',
            ],
            'label' => 'Adresse',
            'label_attr' => [
                'class' => 'form-label mt-3'
            ],
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Length(['min' => 2, 'max' => 255])
                ]
        ])
        ->add('zipcode', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '5',
                'maxlength' => '5',
            ],
            'label' => 'Code Postal',
            'label_attr' => [
                'class' => 'form-label mt-3'
            ],
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Length(['min' => 5, 'max' => 5])
                ]
        ])
        ->add('city', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '150',
            ],
            'label' => 'Ville',
            'label_attr' => [
                'class' => 'form-label mt-3'
            ],
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Length(['min' => 2, 'max' => 150])
                ]
        ])
        ->add('phone', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '10',
                'maxlength' => '10',
            ],
            'label' => 'Téléphone',
            'label_attr' => [
                'class' => 'form-label mt-3'
            ],
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Length(['min' => 10, 'max' => 10])
                ]
        ])
        ->add('plainPassword', PasswordType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Mot de passe',
            'label_attr' => [
                'class' => 'form-label  mt-3'
            ]
        ])
        ->add('submit', SubmitType::class, [
            'attr' => [
                'class' => 'btn btn-primary mt-3'
            ],
            'label' => 'Valider'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
