<?php

namespace App\Form\Back\Steps;

use App\Entity\Steps;
use App\Entity\Website;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AddWebsiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('domainname', TextType::class, [
                'label' => 'Nom de domaine :',
                'required' => true,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('description', TextType::class, [
                'label' => 'Description :',
                'required' => true,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('websitetype', TextType::class, [
                'label' => 'Type de site :',
                'required' => true,
                'attr' => ['class' => 'label-custom', 'placeholder' => 'Site vitrine ou E-Commerce'],
            ])
           
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => ['class' => 'btn-submit-front-shebam'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Website::class,
        ]);
    }
}
