<?php
// src/Plugins/NewsBundle/Admin/NewsAdmin.php

namespace Plugins\NewsBundle\Admin;

use Sonata\AdminBundle\Validator\ErrorElement;

use Sonata\AdminBundle\Route\RouteCollection;

use Symfony\Component\Form\FormBuilder;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class NewsAdmin extends Admin
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
            ->add('short', 'textarea', array('label' => 'Short', 'attr' => array('class' => 'tinymce')))
            ->add('content', 'textarea', array('label' => 'Content', 'attr' => array('class' => 'tinymce')))
            ->add('metatitle', 'textarea', array('required' => false))
            ->add('metadescription', 'textarea', array('required' => false))
            ->add('metakeywords', 'textarea', array('required' => false))
            ->add('public_at', 'date', array('required' => true))
            ->add('url', 'text', array('required' => false))
        ;

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('short')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text', array('label' => 'Title'))
            ->add('short', 'text', array('label' => 'Short'))
            ->add('url', 'text', array('label' => 'Url'))
            ->add('public_at', 'date', array('label' => 'Public at'))
            ->add('metatitle', 'textarea')
            ->add('metadescription', 'textarea')
            ->add('metakeywords', 'textarea')
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

				$errorElement
            ->with('metatitle')
                ->assertLength(array('max' => 70))
            ->end()
            ->with('metadescription')
                ->assertLength(array('max' => 155))
            ->end()
            ->with('metakeywords')
                ->assertLength(array('max' => 155))
            ->end();
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
