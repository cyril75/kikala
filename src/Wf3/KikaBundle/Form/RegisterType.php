<?php

namespace Wf3\KikaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', 'choice', array(
                'label' => false,
                'choices' => array(
                'm' => 'Homme',
                'f' => 'Femme'
                ),
                'expanded' => true, 
                'multiple' => false
                ))
            ->add('name', null, array(
                'label' => 'Votre nom : '
                ))
            ->add('firstName', null, array(
                'label' => 'Votre prénom : '
                ))
            ->add('pseudo', null, array(
                'label' => 'Votre pseudo : '
                ))
            ->add('img', 'file', array(
                'label' => 'Image : ',
                'attr' => array('required' => false),
                'empty_data'  => 'plop.png'
                ))
            ->add('yearOfBirth', null, array(
                'years' => range(1920, date('Y')),
                'label' => 'Votre date de naissance : '
                ))
            /*->add('yearOfBirth', 'datetime', array(
                'label' => "Votre date de naissance : ",
                'widget' => 'single_text',
                'input' => 'datetime',
                'format' => 'MM/dd/yyyy'
            ))*/
            ->add('email', null, array(
                'label' => 'Votre email : '
                ))
            ->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'options' => array('required' => true),
                'first_options'  => array('label' => 'Mot de passe : '),
                'second_options' => array('label' => 'Mot de passe (confirmation) : ')
                ))
            ->add('job', null, array(
                'label' => 'Quel est votre métier ? '
                ))
            ->add('descriptAsTrainer', null, array(
                'label' => 'Descriptif en tant que formateur : '
                ))
            ->add('descriptAsStudent', null, array(
                'label' => 'Descriptif en tant qu’étudiant : '
                ))
            ->add('Valider !', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wf3\KikaBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wf3_kikabundle_user';
    }
}
