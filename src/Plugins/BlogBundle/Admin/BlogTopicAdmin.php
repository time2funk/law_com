<?php
// src/Plugins/BlogBundle/Admin/BlogTopicAdmin.php

namespace Plugins\BlogBundle\Admin;

use Sonata\AdminBundle\Validator\ErrorElement;

use Sonata\AdminBundle\Route\RouteCollection;

use Symfony\Component\Form\FormBuilder;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogTopicAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        
        $formMapper
            ->add('blogCategory', null, array('label' => 'Category', 'required' => true))
            ->add('name', 'text', array('label' => 'Name'))
            ->add('url', 'text', array('required' => false))
            ->add('metatitle', 'textarea', array('required' => false))
            ->add('metadescription', 'textarea', array('required' => false))
            ->add('metakeywords', 'textarea', array('required' => false))
        ;
    }
    
    public function validate(ErrorElement $errorElement, $object)
    {
        // find object with the same uniqueField-value
        $other = $this->modelManager->findOneBy($this->getClass(), array('url' => $object->getUrl()));
    
        if (null !== $other && $other->getId() !== $object->getId()) {
            $errorElement
                ->with('url')
                ->addViolation('Url must be unique!')
                ->end();
        }
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('blogCategory', null, array('label' => 'Category'))
            ->add('name')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text', array('label' => 'Title'))
            ->add('blogCategory', 'choice', array('label' => 'Category'))
            ->add('url', 'text', array('label' => 'Url'))
            ->add('metatitle', 'textarea')
            ->add('metadescription', 'textarea')
            ->add('metakeywords', 'textarea')
        ;
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        // to remove a delete route
//         $collection->remove('delete');
    }
    
    public function prePersist($object)
    {
        $object->setCreatedAt(new \DateTime());
        $object->setUpdatedAt(new \DateTime());
        
        $this->checkUrl($object);
    }
    
    public function preUpdate($object)
    {
        $object->setUpdatedAt(new \DateTime());
        
        $this->checkUrl($object);
    }
    
    /**
     * Check is url not empty, is empty - create url by name
     * @param unknown_type $object
     */
    protected function checkUrl($object) {
        $url = $object->getUrl();
        if (empty($url)) {
            $object->setUrl($object->cleanUrl($object->getName()));
        }
    }
}