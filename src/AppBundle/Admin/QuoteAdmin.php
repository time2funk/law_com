<?php
// src/AppBundle/Admin/QuoteAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Route\RouteCollection;

use Symfony\Component\Form\FormBuilder;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class QuoteAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $isEdit = false;
        if ($this->id($this->getSubject())) {
            $isEdit = true;
        }
        
        $formMapper
            ->add('name', 'text', array('label' => 'Name'))
            ->add('quote', 'textarea', array('label' => 'Quote'))
        ;
        
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('quote')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text', array('label' => 'Name'))
            ->add('quote', 'text', array('label' => 'Quote'))
        ;
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
    }
    
    public function prePersist($object)
    {
        $object->setCreatedAt(new \DateTime());
        $object->setUpdatedAt(new \DateTime());
    }
    
    public function preUpdate($object)
    {
        $object->setUpdatedAt(new \DateTime());
    }
}