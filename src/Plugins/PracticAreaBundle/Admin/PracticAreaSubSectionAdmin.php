<?php
// src/Plugins/PracticAreaBundle/Admin/PracticAreaSubSectionAdmin.php

namespace Plugins\PracticAreaBundle\Admin;

use Plugins\PracticAreaBundle\Entity\PracticAreaSubSection;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PracticAreaSubSectionAdmin extends AppAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {

				$entity = $this->getSubject();
				$fileFieldOptions = array('required' => false);
				if ($entity) {
						$fileFieldOptions['help'] = '<img src="/' . $entity->getPhotoFullPath() . '" />';
						$fileFieldOptions['label'] = 'Background image';
				}

        $formMapper
            ->add('practicArea', null, array('label' => 'Practic area'))
            ->add('name', 'text', array('label' => 'Name'))
						->add('short', 'textarea', array('label' => 'Short content'))
            ->add('content', 'textarea', array('label' => 'Content', 'attr' => array('class' => 'tinymce')))
						->add('photo', 'file', $fileFieldOptions)
            ->add('ampContent', 'textarea', array('label' => 'Amp content', 'attr' => array('class' => 'tinymce'), 'required' => false))
            ->add('url', 'text', array('required' => false))
            ->add('metatitle', 'textarea', array('required' => false))
            ->add('metadescription', 'textarea', array('required' => false))
            ->add('metakeywords', 'textarea', array('required' => false));

    }


    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('practicArea', null, array('label' => 'Practic area'))
            ->add('name')
            ->add('content');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text', array('label' => 'Title'))
            ->add('practicArea', 'choice', array('label' => 'Practic area'))
            ->add('url', 'text', array('label' => 'Url'))
            ->add('metatitle', 'textarea')
            ->add('metadescription', 'textarea')
            ->add('ampContent', 'boolean', array('label' => 'Amp content'))
            ->add('metakeywords', 'textarea');
    }

    /**
     * (non-PHPdoc)
     * @see Sonata\AdminBundle\Admin.Admin::postBatchAction()
     */
    public function preBatchAction($actionName, ProxyQueryInterface $query, array & $idx, $allElements)
    {
        if ($actionName === 'delete') {
            foreach ($idx as $id) {
                /** @var \PracticAreaSubSection $entity */
                $entity = $this->getModelManager()->find($this->getClass(), $id);
                $this->postRemove($entity);
            }
        }
    }

    /**
     * Upload photo
     *
     * @param \PracticAreaSubSection $entity
     */
    private function manageFileUpload($entity)
    {
        if ($entity->getPhoto()) {
            /* Remove old photo */
            $entity->setUpdatedAt(new \DateTime());
            $entity->lifecycleFileUpload();
        }
    }
    /**
     * Pre update method
     *
     * @param \Attorney $entity
     */
    public function preUpdate($entity) {
        $entity->setUpdatedAt(new \DateTime());
        // $this->checkUrl($entity);
        $this->manageFileUpload($entity);
    }
    public function prePersist($entity) {
        $entity->setCreatedAt(new \DateTime());
        $entity->setUpdatedAt(new \DateTime());

        $this->checkUrl($entity);
        $this->manageFileUpload($entity);
    }
}
