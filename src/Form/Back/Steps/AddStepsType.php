<?php

namespace App\Form\Back\Steps;

use App\Entity\Steps;
use App\Entity\Customer;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

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
        ->add('webdesignvalidated', CheckboxType::class, [
            'label' => 'Maquette Validée',
            'required' => false,
            'mapped' => false,      
            'label_attr' => ['class' => 'label-custom'],
        ])
            ->add('commentcustomerbrief', TextareaType::class, [
                'label' => 'Brief Client',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentcomingsoon', TextareaType::class, [
                'label' => 'Page de Maintenance',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentcustomercontentreception', TextareaType::class, [
                'label' => 'Contenu client',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentpicturesreception', TextareaType::class, [
                'label' => 'Photos',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebdesignprogress', TextareaType::class, [
                'label' => 'Maquette en cours',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebdesignwait', TextareaType::class, [
                'label' => 'Maquette en attente',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebdesignvalidated', TextareaType::class, [
                'label' => 'Maquette validée',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebintegration', TextareaType::class, [
                'label' => 'Intégration',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebtraining', TextareaType::class, [
                'label' => 'Formation',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentonline', TextareaType::class, [
                'label' => 'Mise en ligne (Commentaire)',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('online', DateType::class, [
                'label' => 'Mise en ligne',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
                'mapped' => true
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
