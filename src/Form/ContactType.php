<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Nom',
                ),
                'label' => ' ',))

            ->add('Prenom', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Prénom',
                ),
                'label' => ' ',))

            ->add('Email', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'email@exemple.com',
                ),
                'label' => ' ',))

            ->add('Message', TextAreaType::class, array(
                'attr' => array(
                    'placeholder' => 'Message',
                ),
                'label' => ' ',));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);
    }
}
