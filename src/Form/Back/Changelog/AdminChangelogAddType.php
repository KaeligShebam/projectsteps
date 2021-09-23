<?php

namespace App\Form\Back\Changelog;

use App\Entity\Changelog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class AdminChangelogAddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add( 'version', TextType::class, [
            'required' => true,
            'label' => false,
            'attr' => [
                'class' => ' form-control is-invalid',
                'placeholder' => 'Numéro de la version :'
            ]
        ])
            ->add( 'name', TextType::class, [
            'required' => true,
            'label' => false,
            'attr' => [
                'class' => ' form-control is-invalid',
                'placeholder' => 'Détails :'
            ]
        ])
        ->add('subname', TextType::class, [
            'required' => false,
            'label' => false,
            'attr' => [
                'class' => ' form-control is-invalid',
                'placeholder' => 'Sous-Détail :'
            ]
        ])
        ->add('subname2', TextType::class, [
            'required' => false,
            'label' => false,
            'attr' => [
                'class' => ' form-control is-invalid',
                'placeholder' => 'Sous-Détail 2 :'
            ]
        ])
        ->add('subname3', TextType::class, [
            'required' => false,
            'label' => false,
            'attr' => [
                'class' => ' form-control is-invalid',
                'placeholder' => 'Sous-Détail 3 :'
            ]
        ])
        ->add('created_at', DateTimeType::class, [
            'label' => 'Créé le :',
            'label_attr' => ['class' => 'label-custom'],
            'widget' => 'single_text',
            'minutes' => ['00', '15', '30', '45'],
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Enregistrer',
            'attr' => ['class' => 'btn-submit-admin-shebam'],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Changelog::class,
        ]);
    }
}
