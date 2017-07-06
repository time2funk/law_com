<?php
// src/AppBundle/Admin/QuoteAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Route\RouteCollection;

use Symfony\Component\Form\FormBuilder;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class InterestAdmin extends Admin
{
    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('phone')
            ->add('email')
            ->add('message')
            ->add('ip_address')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name', 'text', array('label' => 'Name'))
            ->add('phone', 'text', array('label' => 'Phone'))
            ->add('email', 'text', array('label' => 'Email'))
            ->add('message', 'textarea', array('label' => 'Message'))
            ->add('ip_address', 'text', array('label' => 'Ip'))
            ->add('created_at', 'date', array('label' => 'Send at'))
        ;
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('delete');
        
        $collection->clearExcept(array('list', 'show'));
    }
}