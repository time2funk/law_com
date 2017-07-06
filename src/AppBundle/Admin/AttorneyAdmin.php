<?php
// src/AppBundle/Admin/AttorneyAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Validator\ErrorElement;

use AppBundle\Entity\Attorney;

use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;

use Sonata\DoctrineORMAdminBundle\Datagrid\ProxyQuery;

use Doctrine\DBAL\Types\Type;

use Kozei\PortfolioBundle\Repository\PhotoRepository;

use Library\ToolsBundle\Lib\Tools;

use Kozei\PortfolioBundle\Entity\Category;

use Symfony\Component\Form\FormBuilder;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AttorneyAdmin extends Admin
{
    /* @var $attorney \AppBundle\Entity\Attorney */

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $attorney = $this->getSubject();
        $fileFieldOptions = array('required' => false);
        if ($attorney) {
            $filename = $attorney->getFilename();
            $fileFieldOptions['help'] = '<img src="/' . Attorney::UPLOAD_DIR_NAME . '/'.$filename.'" />';
            $fileFieldOptions['label'] = 'Attorney photo';
        }

        $formMapper
            ->add('name', 'text', array('label' => 'Name'))
            ->add('specialty', 'textarea', array('label' => 'Specialty',  'attr' => array('class' => 'tinymce')))
            ->add('description', 'textarea', array('label' => 'Description',  'attr' => array('class' => 'tinymce')))
            ->add('photo', 'file', $fileFieldOptions)
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

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label' => 'Name'))
            ->add('specialty', null, array('label' => 'Specialty'))
            ->add('description', null, array('label' => 'Description'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('specialty', 'textarea', array('label' => 'Specialty'))
            ->add('url', 'text', array('label' => 'Url'))
        ;
    }

    /**
     * Pre persist method
     *
     * @param \Attorney $entity
     */
    public function prePersist($entity) {
        $entity->setCreatedAt(new \DateTime());
        $entity->setUpdatedAt(new \DateTime());

        $this->checkUrl($entity);

        $this->manageFileUpload($entity);
    }

    /**
     * Pre update method
     *
     * @param \Attorney $entity
     */
    public function preUpdate($entity) {
        $entity->setUpdatedAt(new \DateTime());
        $this->checkUrl($entity);
        $this->manageFileUpload($entity);
    }

    /**
     * Post remove method
     *
     * @param \Attorney $entity
     */
    public function postRemove($entity) {
        /** TODO remove file */
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

    /**
     * (non-PHPdoc)
     * @see Sonata\AdminBundle\Admin.Admin::postBatchAction()
     */
    public function preBatchAction($actionName, ProxyQueryInterface $query, array & $idx, $allElements) {
        if ($actionName === 'delete') {
            foreach ($idx as $id) {
                $entity = $this->getModelManager()->find($this->getClass(), $id);
                $this->postRemove($entity);
            }
        }
    }
    /**
     * Upload photo
     *
     * @param \Attorney $entity
     */
    private function manageFileUpload($entity) {
        if ($entity->getPhoto()) {
            /* Remove old photo */
            $entity->setUpdatedAt(new \DateTime());
            $entity->lifecycleFileUpload();
        }
    }
}
