<?php

namespace App\Form\Back\Steps;

use App\Entity\Steps;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ModifyStepsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentcustomerbrief', TextareaType::class, [
                'label' => 'Brief Client - Commentaire(s)',
                'label' => 'Brief Client',
                'label' => 'Brief Client',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentcomingsoon', TextareaType::class, [
                'label' => 'Page de Maintenance - Commentaire(s)',
                'label' => 'Page de Maintenance',
                'label' => 'Page de Maintenance',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentcustomercontentreception', TextareaType::class, [
                'label' => 'Contenu client - Commentaire(s)',
                'label' => 'Contenu client',
                'label' => 'Contenu client',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentpicturesreception', TextareaType::class, [
                'label' => 'Photos - Commentaire(s)',
                'label' => 'Photos',
                'label' => 'Photos',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebdesignprogress', TextareaType::class, [
                'label' => 'Maquette en cours - Commentaire(s)',
                'label' => 'Maquette en cours',
                'label' => 'Maquette en cours',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebdesignwait', TextareaType::class, [
                'label' => 'Maquette en attente - Commentaire(s)',
                'label' => 'Maquette en attente',
                'label' => 'Maquette en attente',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebdesignvalidated', TextareaType::class, [
                'label' => 'Maquette validée - Commentaire(s)',
                'label' => 'Maquette validée',
                'label' => 'Maquette validée',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebintegration', TextareaType::class, [
                'label' => 'Intégration - Commentaire(s)',
                'label' => 'Intégration',
                'label' => 'Intégration',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebtraining', TextareaType::class, [
                'label' => 'Formation - Commentaire(s)',
                'label' => 'Formation',
                'label' => 'Formation',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentonline', TextareaType::class, [
                'label' => 'Mise en ligne - Commentaire(s)',

                'label' => 'Mise en ligne (Commentaire)',
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Steps::class,
        ]);
    }
}
