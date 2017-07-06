<?php
// src/Plugins/PracticAreaBundle/Admin/PracticAreaAdmin.php

namespace Plugins\PracticAreaBundle\Admin;

use Plugins\PracticAreaBundle\Entity\PracticArea;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PracticAreaAdmin extends AppAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {

				$entity = $this->getSubject();
				$fileFieldOptions = array('required' => false);
				if ($entity) {
						$fileFieldOptions['help'] = '<img src="/' . $entity->getPhotoFullPath() .'" />';
						$fileFieldOptions['label'] = 'Background image';
				}

        $formMapper
            ->add('name', 'text', array('label' => 'Name'))
            ->add('short', 'textarea', array('label' => 'Short (show at homepage)'))
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
            ->add('name')
            ->add('short')
            ->add('content');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text', array('label' => 'Title'))
            ->add('short', 'textarea')
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
		public function preBatchAction($actionName, ProxyQueryInterface $query, array & $idx, $allElements) {
				if ($actionName === 'delete') {
						foreach ($idx as $id) {
								/** @var PracticArea $entity */
								$entity = $this->getModelManager()->find($this->getClass(), $id);
								$this->postRemove($entity);
						}
				}
		}

		/**
		 * Upload photo
		 *
		 * @param PracticArea $entity
		 */
		private function manageFileUpload($entity) {
				if ($entity->getPhoto()) {
						/* Remove old photo */
						$entity->setUpdatedAt(new \DateTime());
						$entity->lifecycleFileUpload();
				}
		}


}
