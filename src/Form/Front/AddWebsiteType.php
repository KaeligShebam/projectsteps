<?php

namespace App\Form\Front;

use App\Entity\Website;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
                'attr' => ['placeholder' => 'Ecrire comme ça: site.fr'],
                'required' => true,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('description', TextType::class, [
                'label' => 'Description :',
                'required' => true,
                'label_attr' => ['class' => 'label-custom'],
            ])
            ->add('websitetype', ChoiceType::class, [
                'label' => 'Type de site :',
                'choices' => ['Site vitrine' => 'Site vitrine', 'E-commerce' => 'E-commerce'],
                'required' => true,
                'attr' => ['class' => 'label-custom'],
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
