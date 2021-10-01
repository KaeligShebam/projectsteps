<?php

namespace App\Form\Back\Steps;

use App\Entity\Steps;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ModifyStepsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentcustomerbrief', TextareaType::class, [
                'label' => 'Brief Client - Commentaire(s)',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('commentdomainname', TextType::class, [
                'label' => 'Nom de domaine - Commentaire(s)',
                'required' => false,
                'mapped' => false,
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
            ->add('datedomainname', DateType::class, [
                'label' => 'Date d\'achat nom de domaine',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
                'mapped' => true
            ])
            ->add('datecomingsoon', DateType::class, [
                'label' => 'Date de mise en ligne de la coming soon',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
                'mapped' => true
            ])
            ->add('datecustomercontentreception', DateType::class, [
                'label' => 'Date de reception',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
                'mapped' => true
            ])
            ->add('datepicturesreception', DateType::class, [
                'label' => 'Date de reception',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
                'mapped' => true
            ])
            ->add('datewebdesignprogress', DateType::class, [
                'label' => 'Date de début',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
                'mapped' => true
            ])
            ->add('datewebdesignsend', DateType::class, [
                'label' => 'Date d\'envoie',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
                'mapped' => true
            ])
            ->add('datewebdesignvalidated', DateType::class, [
                'label' => 'Date de validation',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
                'mapped' => true
            ])
            ->add('datewebintegration', DateType::class, [
                'label' => 'Date de début',
                'required' => false,
                'label_attr' => ['class' => 'label-custom'],
                'widget' => 'single_text',
                'mapped' => true
            ])
            ->add('datewebtraining', DateType::class, [
                'label' => 'Date de début',
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
