<?php

namespace App\Form\Back\Steps;

use App\Entity\Steps;
use App\Entity\Customer;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
            'label' => 'Brief client',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('domainname', CheckboxType::class, [
            'label' => 'Nom de domaine',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('comingsoon', CheckboxType::class, [
            'label' => 'Comming soon',
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
            'label' => 'Reception photos',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('webdesignprogress', CheckboxType::class, [
            'label' => 'Maquette en cours',
            'required' => false,
            'mapped' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('webdesignwait', CheckboxType::class, [
            'label' => 'Maquette envoyée',
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
            'label' => 'Maquette validée',
            'required' => false,
            'mapped' => false,      
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentcustomerbrief', TextareaType::class, [
            'label' => 'Brief Client - Commentaire(s)',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentdomainname', TextType::class, [
            'label' => 'Nom de domaine - Commentaire(s)',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentcomingsoon', TextareaType::class, [
            'label' => 'Page de Maintenance - Commentaire(s)',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentcustomercontentreception', TextareaType::class, [
            'label' => 'Contenu client - Commentaire(s)',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentpicturesreception', TextareaType::class, [
            'label' => 'Photos - Commentaire(s)',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentwebdesignprogress', TextareaType::class, [
            'label' => 'Maquette en cours - Commentaire(s)',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentwebdesignsend', TextareaType::class, [
            'label' => 'Maquette envoyée - Commentaire(s)',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentwebdesignvalidated', TextareaType::class, [
            'label' => 'Maquette validée - Commentaire(s)',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentwebintegration', TextareaType::class, [
            'label' => 'Intégration - Commentaire(s)',
            'required' => false,
            'label_attr' => ['class' => 'label-custom'],
        ])
        ->add('commentwebtraining', TextareaType::class, [
            'label' => 'Formation - Commentaire(s)',
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
        ->add('datecustomerbrief', DateType::class, [
            'label' => 'Date du brief',
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
