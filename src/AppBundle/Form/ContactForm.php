<?php
// src/AppBundle/Form/ContactForm.php

namespace AppBundle\Form;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactForm extends AbstractType 
{
    const FORM_NAME = 'contact';
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', 'text', array(
                'label' => 'Name',
                'attr' => array ('placeholder' => 'Name'),
                'required' => true
        ));
        
        $builder->add('email', 'email', array(
                'label' => 'E-mail', 
                'attr' => array ('placeholder' => 'E-mail'),
                'required' => true
        ));
        
        $builder->add('phone', 'text', array(
                'label' => 'Phone number', 
                'attr' => array ('placeholder' => 'Phone number'),
                'required' => true
        ));
        
        $builder->add('message', 'textarea', array(
                'label' => 'Tell us',
                'attr' => array ('placeholder' => 'Tell us about your case'),
                'required' => true
        ));
    }
    
    public function getName() {
        return self::FORM_NAME;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class'      => 'AppBundle\Entity\Interest',
            'csrf_protection' => false,
        ));
    }
}
