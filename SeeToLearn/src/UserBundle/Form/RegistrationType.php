<?php
// src/UserBundle/Form/RegistrationType.php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('niveau', ChoiceType::class, array(
                'choices' => array(
                    'Erudit' => 'Erudit',
                    'Adulte' => 'Adulte',
                    'Enfant' => 'Enfant'
                ),
            ))
            ->add('langue', ChoiceType::class, array(
                'choices' => array(
                    'Anglais' => 'Anglais',
                    'Espagnol' => 'Espagnol'
                ),
            ))
        ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }


    public function getName()
    {
        return 'user_user_registration';
    }
}