<?php

namespace App\Form\Back\Steps;

use App\Entity\Steps;
use App\Entity\Customer;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AddStepsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('customer', EntityType::class, [
                'class' => Customer::class,
                'label' => 'Client',
                'required' => true,
                'label_attr' => ['class' => 'label-custom'],
            ])

            ->add('customerbrief', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentcustomerbrief', TextareaType::class, [
                'label' => 'Brief client',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datecustomerbrief', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
            ])
            ->add('commentdomainname', TextareaType::class, [
                'label' => 'Commentaire nom de domaine',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('domainname', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('domain', TextType::class, [
                'label' => 'Nom de domaine',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datedomainname', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
            ])

            ->add('commentcomingsoon', TextareaType::class, [
                'label' => 'Page de Maintenance',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('comingsoon', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datecomingsoon', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
            ])

            ->add('commentcustomercontentreception', TextareaType::class, [
                'label' => 'Contenu client',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('customercontentreception', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datecustomercontentreception', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
            ])
            
            ->add('commentpicturesreception', TextareaType::class, [
                'label' => 'Photos',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('picturesreception', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datepicturesreception', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
            ])
            
            ->add('commentwebdesignprogress', TextareaType::class, [
                'label' => 'Maquette en cours',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('webdesignprogress', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datewebdesignprogress', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
            ])

            ->add('commentwebdesignsend', TextareaType::class, [
                'label' => 'Maquette envoyée',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('webdesignsend', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datewebdesignsend', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
            ])
            ->add('commentwebdesignvalidated', TextareaType::class, [
                'label' => 'Maquette validée',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('webdesignvalidated', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datewebdesignvalidated', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
            ])

            ->add('commentwebintegration', TextareaType::class, [
                'label' => 'Intégration',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('webintegration', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datewebintegration', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
            ])

            ->add('commentwebtraining', TextareaType::class, [
                'label' => 'Formation',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('webtraining', CheckboxType::class, [
                'label' => 'Fait',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('datewebtraining', DateType::class, [
                'label' => false,
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
            ])
            
            ->add('online', DateType::class, [
                'label' => 'Mise en ligne',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text'
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
