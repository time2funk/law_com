<?php
// src/Plugins/ContentBundle/Admin/ContentAdmin.php

namespace Plugins\ContentBundle\Admin;

use Sonata\AdminBundle\Route\RouteCollection;

use Symfony\Component\Form\FormBuilder;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ContentAdmin extends Admin
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
            ->add('key', 'text', array('label' => 'Key', 'read_only' => $isEdit))
            ->add('content', 'textarea', array('label' => 'Content', 'attr' => array('class' => 'tinymce')))
            ->add('metatitle', 'textarea', array('required' => false))
            ->add('metadescription', 'textarea', array('required' => false))
            ->add('metakeywords', 'textarea', array('required' => false))
        ;
        
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('key')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text', array('label' => 'Title'))
            ->add('key', 'text', array('label' => 'Key'))
            ->add('metatitle', 'textarea')
            ->add('metadescription', 'textarea')
            ->add('metakeywords', 'textarea')
        ;
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        // to remove a delete route
        $collection->remove('delete');
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