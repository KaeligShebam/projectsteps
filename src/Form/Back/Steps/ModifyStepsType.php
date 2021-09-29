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
<<<<<<< HEAD
                'label' => 'Brief Client - Commentaire(s)',
=======
                'label' => 'Brief Client',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentcomingsoon', TextareaType::class, [
<<<<<<< HEAD
                'label' => 'Page de Maintenance - Commentaire(s)',
=======
                'label' => 'Page de Maintenance',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentcustomercontentreception', TextareaType::class, [
<<<<<<< HEAD
                'label' => 'Contenu client - Commentaire(s)',
=======
                'label' => 'Contenu client',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentpicturesreception', TextareaType::class, [
<<<<<<< HEAD
                'label' => 'Photos - Commentaire(s)',
=======
                'label' => 'Photos',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebdesignprogress', TextareaType::class, [
<<<<<<< HEAD
                'label' => 'Maquette en cours - Commentaire(s)',
=======
                'label' => 'Maquette en cours',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebdesignwait', TextareaType::class, [
<<<<<<< HEAD
                'label' => 'Maquette en attente - Commentaire(s)',
=======
                'label' => 'Maquette en attente',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebdesignvalidated', TextareaType::class, [
<<<<<<< HEAD
                'label' => 'Maquette validée - Commentaire(s)',
=======
                'label' => 'Maquette validée',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebintegration', TextareaType::class, [
<<<<<<< HEAD
                'label' => 'Intégration - Commentaire(s)',
=======
                'label' => 'Intégration',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentwebtraining', TextareaType::class, [
<<<<<<< HEAD
                'label' => 'Formation - Commentaire(s)',
=======
                'label' => 'Formation',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentonline', TextareaType::class, [
<<<<<<< HEAD
                'label' => 'Mise en ligne - Commentaire(s)',
=======
                'label' => 'Mise en ligne (Commentaire)',
>>>>>>> 20495584d445fb65d8e0a0861d1b58d8776cd64d
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
