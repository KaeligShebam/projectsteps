<?php

namespace App\Form\Back\Steps;

use App\Entity\Steps;
use App\Entity\Customer;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class AddStepsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('customer', EntityType::class, array(
            'required' => true,
            'label' => 'Client',
            'class' => Customer::class,
            'attr' => [
                'class' => 'select-customer'
            ],
            'label_attr' => ['class' => 'label-custom'],
        ))
        ->add('customerbrief', CheckboxType::class, [
            'label' => 'Brief Client',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('comingsoon', CheckboxType::class, [
            'label' => 'Comming Soon En Ligne',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('customercontentreception', CheckboxType::class, [
            'label' => 'Réception Contenu Client',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('picturesreception', CheckboxType::class, [
            'label' => 'Reception Photos',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('webdesignprogress', CheckboxType::class, [
            'label' => 'Maquette En Cours',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('webdesignwait', CheckboxType::class, [
            'label' => 'Maquette En Attente De Validation',
            'required' => false,
            'mapped' => false,     
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('webdesignvalidated', CheckboxType::class, [
            'label' => 'Maquette validée',
            'required' => false,
            'mapped' => false,      
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('webintegration', CheckboxType::class, [
            'label' => 'Intégration',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('webtraining', CheckboxType::class, [
            'label' => 'Formation',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('online', DateTimeType::class, [
            'label' => 'Mise en ligne',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
            'widget' => 'single_text',
            'minutes' => ['00', '15', '30', '45']
        ])
        ->add('webdesignvalidated', CheckboxType::class, [
            'label' => 'Maquette Validée',
            'required' => false,
            'mapped' => false,      
            'label_attr' => ['class' => 'label-custom'],
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
            'data_class' => Steps::class,
        ]);
    }
}
